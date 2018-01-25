<?php
namespace App\Http\Controllers\Address;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address\AddressGetDetailViewRequest;
use App\Http\Requests\Address\AddressGetEditViewRequest;
use App\Http\Requests\Address\AddressGetViewRequest;
use App\Http\Requests\Address\AddressPostCreateAjaxRequest;
use App\Http\Requests\Address\AddressPostCreateRequest;
use App\Http\Requests\Address\AddressPostDeleteAjaxRequest;
use App\Http\Requests\Address\AddressPostDeleteRequest;
use App\Http\Requests\Address\AddressPostUpdateAjaxRequest;
use App\Http\Requests\Address\AddressPostUpdateRequest;
use App\Repository\Address\AddressRepository;

class AddressController extends Controller
{
    /**
     * address repository
     * @var object class
     */
    protected $address;

    public function __construct(AddressRepository $address)
    {
        $this->address = $address;
    }

    /**
     * [getAddressListView]
     * @param  AddressGetViewRequest $request [validation]
     * @return view object
     */
    public function getAddressListView()
    {
        return $this->address->getViewList();
    }

    /**
     * [getAddressDetailView]
     * @param  AddressGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getAddressDetailView(AddressGetDetailViewRequest $request)
    {
        return $this->address->getViewDetail($request->id);
    }

    /**
     * [getAddressEditView]
     * @param  AddressGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getAddressEditView(AddressGetEditViewRequest $request)
    {
        return $this->address->getViewEdit($request->id);
    }

    /**
     * [getAddressCreateView]
     * @return view object
     */
    public function getAddressCreateView()
    {
        return $this->address->getViewCreate();
    }

    /**
     * [postAddressCreate]
     * @param  AddressPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postAddressCreate(AddressPostCreateRequest $request)
    {
        $this->address->createData($request->all());
        return redirect()->route('address.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAddressUpdate]
     * @param  AddressPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postAddressUpdate(AddressPostUpdateRequest $request)
    {
        $this->address->upadateData($request->all());
        return redirect()->route('address.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAddressDelete]
     * @param  AddressPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postAddressDelete(AddressPostDeleteRequest $request)
    {
        $this->address->deleteData($request->id);
        return redirect()->route('address.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postAddressCreateAjax]
     * @param  AddressPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postAddressCreateAjax(AddressPostCreateAjaxRequest $request)
    {
        $response = $this->address->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postAddressUpdateAjax]
     * @param  AddressPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postAddressUpdateAjax(AddressPostUpdateAjaxRequest $request)
    {
        $response = $this->address->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postAddressDeleteAjax]
     * @param  AddressPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postAddressDeleteAjax(AddressPostDeleteAjaxRequest $request)
    {
        $response = $this->address->deleteData($request->id);
        return response()->json($response);
    }

}
