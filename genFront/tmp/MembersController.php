<?php
namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Members\MembersGetDetailViewRequest;
use App\Http\Requests\Members\MembersGetEditViewRequest;
use App\Http\Requests\Members\MembersGetViewRequest;
use App\Http\Requests\Members\MembersPostCreateAjaxRequest;
use App\Http\Requests\Members\MembersPostCreateRequest;
use App\Http\Requests\Members\MembersPostDeleteAjaxRequest;
use App\Http\Requests\Members\MembersPostDeleteRequest;
use App\Http\Requests\Members\MembersPostUpdateAjaxRequest;
use App\Http\Requests\Members\MembersPostUpdateRequest;
use App\Repository\Members\MembersRepository;

class MembersController extends Controller
{
    /**
     * members repository
     * @var object class
     */
    protected $members;

    public function __construct(MembersRepository $members)
    {
        $this->members = $members;
    }

    /**
     * [getMembersListView]
     * @param  MembersGetViewRequest $request [validation]
     * @return view object
     */
    public function getMembersListView()
    {
        return $this->members->getViewList();
    }

    /**
     * [getMembersDetailView]
     * @param  MembersGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getMembersDetailView(MembersGetDetailViewRequest $request)
    {
        return $this->members->getViewDetail($request->id);
    }

    /**
     * [getMembersEditView]
     * @param  MembersGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getMembersEditView(MembersGetEditViewRequest $request)
    {
        return $this->members->getViewEdit($request->id);
    }

    /**
     * [getMembersCreateView]
     * @return view object
     */
    public function getMembersCreateView()
    {
        return $this->members->getViewCreate();
    }

    /**
     * [postMembersCreate]
     * @param  MembersPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postMembersCreate(MembersPostCreateRequest $request)
    {
        $this->members->createData($request->all());
        return redirect()->route('members.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postMembersUpdate]
     * @param  MembersPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postMembersUpdate(MembersPostUpdateRequest $request)
    {
        $this->members->upadateData($request->all());
        return redirect()->route('members.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postMembersDelete]
     * @param  MembersPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postMembersDelete(MembersPostDeleteRequest $request)
    {
        $this->members->deleteData($request->id);
        return redirect()->route('members.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postMembersCreateAjax]
     * @param  MembersPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postMembersCreateAjax(MembersPostCreateAjaxRequest $request)
    {
        $response = $this->members->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postMembersUpdateAjax]
     * @param  MembersPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postMembersUpdateAjax(MembersPostUpdateAjaxRequest $request)
    {
        $response = $this->members->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postMembersDeleteAjax]
     * @param  MembersPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postMembersDeleteAjax(MembersPostDeleteAjaxRequest $request)
    {
        $response = $this->members->deleteData($request->id);
        return response()->json($response);
    }

}
