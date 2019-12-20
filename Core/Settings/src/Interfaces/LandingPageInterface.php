<?php


namespace Core\Settings\Interfaces;


use Illuminate\Http\Request;

interface LandingPageInterface
{

    /**
     * get resources' specific
     * columns
     *
     * @param array $cols
     * @return mixed
     * @author Amr
     */
    public function get($cols = ['*']);

    /**
     * get all resources
     *
     *
     * @return mixed
     * @author Amr
     */
    public function all();

    /***
     * find resource by id
     *
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function find($id);

    /**
     * create new resource
     *
     * @param Request $request
     * @return mixed
     * @author Amr
     */

    public function store(Request $request);

    /**
     * update resource by id
     *
     * @param Request $request
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function update(Request $request, $id);

    /**
     * delete resource by id
     *
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function delete($id);

    /**
     * @return mixed
     */
    function parents();
}