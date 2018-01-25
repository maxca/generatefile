<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Home\HomeGetDetailViewRequest;
use App\Http\Requests\Home\HomeGetEditViewRequest;
use App\Http\Requests\Home\HomeGetViewRequest;
use App\Http\Requests\Home\HomePostCreateAjaxRequest;
use App\Http\Requests\Home\HomePostCreateRequest;
use App\Http\Requests\Home\HomePostDeleteAjaxRequest;
use App\Http\Requests\Home\HomePostDeleteRequest;
use App\Http\Requests\Home\HomePostUpdateAjaxRequest;
use App\Http\Requests\Home\HomePostUpdateRequest;
use App\Repository\Home\HomeRepository;

class HomeController extends Controller
{
    /**
     * home repository
     * @var object class
     */
    protected $home;

    public function __construct(HomeRepository $home)
    {
        $this->home = $home;
    }

    /**
     * [getHomeListView]
     * @param  HomeGetViewRequest $request [validation]
     * @return view object
     */
    public function getHomeListView()
    {
        return $this->home->getViewList();
    }

    /**
     * [getHomeDetailView]
     * @param  HomeGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getHomeDetailView(HomeGetDetailViewRequest $request)
    {
        return $this->home->getViewDetail($request->id);
    }

    /**
     * [getHomeEditView]
     * @param  HomeGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getHomeEditView(HomeGetEditViewRequest $request)
    {
        return $this->home->getViewEdit($request->id);
    }

    /**
     * [getHomeCreateView]
     * @return view object
     */
    public function getHomeCreateView()
    {
        return $this->home->getViewCreate();
    }

    /**
     * [postHomeCreate]
     * @param  HomePostCreateRequest $request [validate]
     * @return redirect
     */
    public function postHomeCreate(HomePostCreateRequest $request)
    {
        $this->home->createData($request->all());
        return redirect()->route('home.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postHomeUpdate]
     * @param  HomePostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postHomeUpdate(HomePostUpdateRequest $request)
    {
        $this->home->upadateData($request->all());
        return redirect()->route('home.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postHomeDelete]
     * @param  HomePostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postHomeDelete(HomePostDeleteRequest $request)
    {
        $this->home->deleteData($request->id);
        return redirect()->route('home.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postHomeCreateAjax]
     * @param  HomePostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postHomeCreateAjax(HomePostCreateAjaxRequest $request)
    {
        $response = $this->home->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postHomeUpdateAjax]
     * @param  HomePostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postHomeUpdateAjax(HomePostUpdateAjaxRequest $request)
    {
        $response = $this->home->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postHomeDeleteAjax]
     * @param  HomePostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postHomeDeleteAjax(HomePostDeleteAjaxRequest $request)
    {
        $response = $this->home->deleteData($request->id);
        return response()->json($response);
    }

}
