<?php
namespace App\Http\Controllers\PinSearch;

use App\Http\Controllers\Controller;
use App\Http\Requests\PinSearch\PinSearchGetDetailViewRequest;
use App\Http\Requests\PinSearch\PinSearchGetEditViewRequest;
use App\Http\Requests\PinSearch\PinSearchGetViewRequest;
use App\Http\Requests\PinSearch\PinSearchPostCreateAjaxRequest;
use App\Http\Requests\PinSearch\PinSearchPostCreateRequest;
use App\Http\Requests\PinSearch\PinSearchPostDeleteAjaxRequest;
use App\Http\Requests\PinSearch\PinSearchPostDeleteRequest;
use App\Http\Requests\PinSearch\PinSearchPostUpdateAjaxRequest;
use App\Http\Requests\PinSearch\PinSearchPostUpdateRequest;
use App\Repository\PinSearch\PinSearchRepository;

class PinSearchController extends Controller
{
    /**
     * pinsearch repository
     * @var object class
     */
    protected $pinsearch;

    public function __construct(PinSearchRepository $pinsearch)
    {
        $this->pinsearch = $pinsearch;
    }

    /**
     * [getPinSearchListView]
     * @param  PinSearchGetViewRequest $request [validation]
     * @return view object
     */
    public function getPinSearchListView()
    {
        return $this->pinsearch->getViewList();
    }

    /**
     * [getPinSearchDetailView]
     * @param  PinSearchGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getPinSearchDetailView(PinSearchGetDetailViewRequest $request)
    {
        return $this->pinsearch->getViewDetail($request->id);
    }

    /**
     * [getPinSearchEditView]
     * @param  PinSearchGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getPinSearchEditView(PinSearchGetEditViewRequest $request)
    {
        return $this->pinsearch->getViewEdit($request->id);
    }

    /**
     * [getPinSearchCreateView]
     * @return view object
     */
    public function getPinSearchCreateView()
    {
        return $this->pinsearch->getViewCreate();
    }

    /**
     * [postPinSearchCreate]
     * @param  PinSearchPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postPinSearchCreate(PinSearchPostCreateRequest $request)
    {
        $this->pinsearch->createData($request->all());
        return redirect()->route('pin_search.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postPinSearchUpdate]
     * @param  PinSearchPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postPinSearchUpdate(PinSearchPostUpdateRequest $request)
    {
        $this->pinsearch->upadateData($request->all());
        return redirect()->route('pin_search.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postPinSearchDelete]
     * @param  PinSearchPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postPinSearchDelete(PinSearchPostDeleteRequest $request)
    {
        $this->pinsearch->deleteData($request->id);
        return redirect()->route('pin_search.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postPinSearchCreateAjax]
     * @param  PinSearchPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postPinSearchCreateAjax(PinSearchPostCreateAjaxRequest $request)
    {
        $response = $this->pinsearch->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postPinSearchUpdateAjax]
     * @param  PinSearchPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postPinSearchUpdateAjax(PinSearchPostUpdateAjaxRequest $request)
    {
        $response = $this->pinsearch->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postPinSearchDeleteAjax]
     * @param  PinSearchPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postPinSearchDeleteAjax(PinSearchPostDeleteAjaxRequest $request)
    {
        $response = $this->pinsearch->deleteData($request->id);
        return response()->json($response);
    }

}
