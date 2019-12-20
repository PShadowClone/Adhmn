<?php


namespace Core\Settings\Controllers;


use App\Http\Controllers\Controller;
use Core\Settings\Interfaces\LandingPageInterface;
use Core\Settings\Repository\LandingPageRepository;
use Core\Settings\Requests\LandingPageRequest;

class LandingPageController extends Controller
{
    /**
     * @var LandingPageInterface
     */
    private $landingRepository;

    /**
     * LandingPageController constructor.
     * @param LandingPageInterface $landingRepository
     */
    public function __construct(LandingPageInterface $landingRepository)
    {
//        $this->middleware('auth:' . SUPER_ADMIN, ['except' => ['parentWithChildren']]);
        $this->landingRepository = $landingRepository;
    }

    function index()
    {
        $landing = $this->landingRepository->all();
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.landing_fetched'), $landing);

    }

    /**
     * @return mixed
     */
    function parents()
    {
        $landing = $this->landingRepository->parents();
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.parents_fetched'), $landing);
    }

    function parentWithChildren()
    {
        $landing = $this->landingRepository->parentWithChildren();
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.parents_fetched'), $landing);
    }


    function show($id)
    {
        $landing = $this->landingRepository->find($id);
        return response()->api(SUCCESS_RESPONSE, trans('Settings::lang.landing_fetched'), $landing);

    }

    function update(LandingPageRequest $request, $id)
    {
        $landing = $this->landingRepository->update($request, $id);
        return response()->api(SUCCESS_RESPONSE, "landing section updated successfully", $landing);
    }

    /**
     * @param LandingPageRequest $request
     * @return mixed
     */
    function store(LandingPageRequest $request)
    {
        $landing = $this->landingRepository->store($request);
        return response()->api(SUCCESS_RESPONSE, "landing section created successfully", $landing);

    }

    function destroy($id)
    {
        $landing = $this->landingRepository->delete($id);
        return response()->api(SUCCESS_RESPONSE, "landing section deleted successfully", $landing);
    }
}