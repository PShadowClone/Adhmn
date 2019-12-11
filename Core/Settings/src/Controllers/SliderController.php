<?php


namespace Core\Settings\Controllers;


use App\Http\Controllers\Controller;
use Core\Settings\Interfaces\SliderInterface;

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
        $this->sliderRepository = $sliderRepository;
    }
}