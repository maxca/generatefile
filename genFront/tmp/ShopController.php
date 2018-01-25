<?php
namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ShopGetDetailViewRequest;
use App\Http\Requests\Shop\ShopGetEditViewRequest;
use App\Http\Requests\Shop\ShopGetViewRequest;
use App\Http\Requests\Shop\ShopPostCreateAjaxRequest;
use App\Http\Requests\Shop\ShopPostCreateRequest;
use App\Http\Requests\Shop\ShopPostDeleteAjaxRequest;
use App\Http\Requests\Shop\ShopPostDeleteRequest;
use App\Http\Requests\Shop\ShopPostUpdateAjaxRequest;
use App\Http\Requests\Shop\ShopPostUpdateRequest;
use App\Repository\Shop\ShopRepository;

class ShopController extends Controller
{
    /**
     * shop repository
     * @var object class
     */
    protected $shop;

    public function __construct(ShopRepository $shop)
    {
        $this->shop = $shop;
    }

    /**
     * [getShopListView]
     * @param  ShopGetViewRequest $request [validation]
     * @return view object
     */
    public function getShopListView()
    {
        return $this->shop->getViewList();
    }

    /**
     * [getShopDetailView]
     * @param  ShopGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getShopDetailView(ShopGetDetailViewRequest $request)
    {
        return $this->shop->getViewDetail($request->id);
    }

    /**
     * [getShopEditView]
     * @param  ShopGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getShopEditView(ShopGetEditViewRequest $request)
    {
        return $this->shop->getViewEdit($request->id);
    }

    /**
     * [getShopCreateView]
     * @return view object
     */
    public function getShopCreateView()
    {
        return $this->shop->getViewCreate();
    }

    /**
     * [postShopCreate]
     * @param  ShopPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postShopCreate(ShopPostCreateRequest $request)
    {
        $this->shop->createData($request->all());
        return redirect()->route('shop.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShopUpdate]
     * @param  ShopPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postShopUpdate(ShopPostUpdateRequest $request)
    {
        $this->shop->upadateData($request->all());
        return redirect()->route('shop.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShopDelete]
     * @param  ShopPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postShopDelete(ShopPostDeleteRequest $request)
    {
        $this->shop->deleteData($request->id);
        return redirect()->route('shop.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postShopCreateAjax]
     * @param  ShopPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postShopCreateAjax(ShopPostCreateAjaxRequest $request)
    {
        $response = $this->shop->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postShopUpdateAjax]
     * @param  ShopPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postShopUpdateAjax(ShopPostUpdateAjaxRequest $request)
    {
        $response = $this->shop->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postShopDeleteAjax]
     * @param  ShopPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postShopDeleteAjax(ShopPostDeleteAjaxRequest $request)
    {
        $response = $this->shop->deleteData($request->id);
        return response()->json($response);
    }

}
