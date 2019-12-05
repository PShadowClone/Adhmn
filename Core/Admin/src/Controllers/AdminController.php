<?php

namespace Core\Admin\Controllers;

use Core\Admin\Interfaces\AdminInterface;
use Core\Admin\Requests\AdminStoreRequest;
use Core\Admin\Requests\AdminUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    /**
     * controller repo.
     *
     * @author Amr
     * @var AdminInterface
     */
    private $adminRepository;

    /**
     * AdminController constructor.
     *
     * @param AdminInterface $adminRepository
     * @author Amr
     */
    public function __construct(AdminInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $method = request()->input('is_paginated', ALL_METHOD);
        $method = query_method($method);
        $admins = $this->adminRepository->$method();
        return response()->api(SUCCESS_RESPONSE, trans('Admin::lang.admins_fetched_successfully'), $admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStoreRequest $request)
    {
        $admin = $this->adminRepository->store($request);
        return response()->api(SUCCESS_RESPONSE, trans('lang.created_successfully', ['attribute' => trans('Admin::lang.admin')]), $admin);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = $this->adminRepository->find($id);
        return response()->api(SUCCESS_RESPONSE, trans('Admin::lang.admins_fetched_successfully'), $admin);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpdateRequest $request, $id)
    {
        $admin = $this->adminRepository->update($request, $id);
        return response()->api(SUCCESS_RESPONSE,
            trans('lang.updated_successfully', ['attribute' => trans('Admin::lang.admin')]),
            $admin);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = $this->adminRepository->delete($id);
        return response()->api(SUCCESS_RESPONSE,
            trans('lang.deleted_successfully', ['attribute' => trans('Admin::lang.admin')]),
            $admin);
    }
}
