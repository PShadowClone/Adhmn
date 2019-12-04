<?php


namespace Core\Country\Repository;


use Core\Country\Interfaces\CountryInterface;
use Core\Country\Models\Country;
use Illuminate\Http\Request;

class CountryRepository implements CountryInterface
{
    /**
     * repo. model
     *
     * @author Amr
     * @var Country
     */
    private $country;

    /**
     * CountryRepository constructor.
     * @param Country $country
     */
    public function __construct(Country $country)
    {
        $this->country = $country;
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
        return $this->country->orderBy('created_at', 'desc')->get($cols);
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
        return $this->country->orderBy('created_at', 'desc')->paginate(DEFAULT_PAGINATION);
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
        return $this->country->findOrFail($id);
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