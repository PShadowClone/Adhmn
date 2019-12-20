<?php


namespace Core\Settings\Controllers;


use App\Http\Controllers\Controller;
use Core\Settings\Interfaces\SliderInterface;
use Core\Settings\Requests\SliderRequest;

class SliderController extends Controller
{
    /**
     * controller's repo.
     *
     * @author Amr
     * @var SliderInterface
     */
    private $sliderRepository;

    /**
     * SliderController constructor.
     *
     * @param SliderInterface $sliderRepository
     * @author Amr
     */
    public function __construct(SliderInterface $sliderRepository)
    {
        $this->middleware('auth:' . SUPER_ADMIN, ['except' => ['index', 'show']]);
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * fetch all sliders
     *
     * @return mixed
     * @author Amr
     */
    function index()
    {
        $isPaginated = request()->input('is_paginated', PAGINATED);
        if ($isPaginated)
            $sliders = $this->sliderRepository->all();
        else
            $sliders = $this->sliderRepository->get();
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.sliders_fetched_successfully'), $sliders);
    }

    /**
     * fetch slider's data
     *
     * @param $id
     * @return mixed
     * @author Amr
     */
    function show($id)
    {
        $slider = $this->sliderRepository->find($id);
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.slider_fetched_successfully'), $slider);
    }

    /**
     * store the slider content
     *
     *
     * @param SliderRequest $request
     * @return mixed
     * @author Amr
     */
    function store(SliderRequest $request)
    {
        $slider = $this->sliderRepository->store($request);
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.slider_saved_successfully'), $slider);
    }

    function update(SliderRequest $request, $id)
    {
        $slider = $this->sliderRepository->update($request, $id);
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.slider_saved_successfully'), $slider);

    }

    /**
     * remove the slider accordin' to the passed id
     * @param $id
     * @return mixed
     * @author Amr
     */
    function destroy($id)
    {
        $slider = $this->sliderRepository->delete($id);
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.slider_deleted_successfully'), $slider);
    }


}