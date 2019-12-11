<?php


namespace Core\Settings\Repository;


use Core\Settings\Interfaces\SliderInterface;
use Core\Settings\Models\Slider;
use Illuminate\Http\Request;

/**
 * Class SliderRepository
 *
 * @author Amr
 * @package Core\Settings\Repository
 */
class SliderRepository implements SliderInterface
{
    /**
     * repo. model
     *
     * @author Amr
     * @var Slider
     */
    private $slider;

    /**
     * SliderRepository constructor.
     * @param Slider $slider
     */
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
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
        return $this->slider->orderBy('created_at')->get($cols);
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
        return $this->slider->orderBy('created_at')->paginate(DEFAULT_PAGINATION);
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
        return $this->slider->findOrFail($id);
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
        // TODO: Implement store() method.
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
        // TODO: Implement update() method.
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
        // TODO: Implement delete() method.
    }
}