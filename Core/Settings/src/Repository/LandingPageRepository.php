<?php


namespace Core\Settings\Repository;


use Core\Settings\Interfaces\LandingPageInterface;
use Core\Settings\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Builder\DefaultUuidBuilder;

class LandingPageRepository implements LandingPageInterface
{
    /**
     * @var
     */
    private $landingPage;

    /**
     * LandingPageRepository constructor.
     * @param LandingPage $landingPage
     */
    function __construct(LandingPage $landingPage)
    {
        $this->landingPage = $landingPage;
    }

    /**
     *
     * @return mixed
     */
    function baseFetch()
    {
        return $this->landingPage->orderBy('created_at', 'desc');
    }

    /**
     * get resources' specific
     * columns
     *
     * @param array $cols
     * @return mixed
     * @author Amr
     */
    public function get($cols = ['*'])
    {
        return $this->landingPage->with(['image', 'parent'])->orderBy('created_at', 'desc')->where('parent_id', '<>', null)->get($cols);
    }

    /**
     * get all resources
     *
     *
     * @return mixed
     * @author Amr
     */
    public function all()
    {
        return $this->landingPage->with(['image', 'parent'])->orderBy('created_at', 'desc')->where('parent_id', '<>', null)->paginate(DEFAULT_PAGINATION);
    }

    /***
     * find resource by id
     *
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function find($id)
    {
        return $this->landingPage->findOrFail($id);
    }

    /**
     * create new resource
     *
     * @param Request $request
     * @return mixed
     * @author Amr
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('images');
        $data = $request->except('image');
        $landing = $this->landingPage->create($data);
        $landing->image()->create(['path' => $path]);
        return $landing;
    }

    /**
     * @return mixed
     */
    function parents()
    {
        return $this->baseFetch()->where('parent_id', null)->get();
    }

    /**
     * update resource by id
     *
     * @param Request $request
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function update(Request $request, $id)
    {
        $slider = $this->find($id);
//        $slider->fill($request->except('image'));
        $slider->key = $request->input('key', '');
        $slider->title = $request->input('title', '');
        $slider->content = $request->input('content', '');
        $slider->parent_id = $request->input('parent_id', '');
        $slider->update();
        if (!$request->hasFile('image')) {
            return;
        }
        if ($slider->image) {
            $oldPath = $slider->image->path;//->delete();
            $slider->image()->delete();
            Storage::disk('public')->delete($oldPath);
        }
        $path = $request->file('image')->store('images');
        $slider->image()->create(['path' => $path]);
        return $this->find($id);
    }

    /**
     * delete resource by id
     *
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function delete($id)
    {
        $landing = $this->find($id);
        if ($landing->children()->count() > 0) {
            throw new \Exception('Could not remove the resource because it has children');
        }
        if (!$landing->parent_id) {
            throw new \Exception('Could not remove the resource because it has children');
        }
        $landing->delete();
        return $landing;
    }

    public function parentWithChildren()
    {
        return $this->landingPage->with(['children', 'parent'])->orderBy('created_at', 'desc')->where('parent_id', null)->get();
    }
}