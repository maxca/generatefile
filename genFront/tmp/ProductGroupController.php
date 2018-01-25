<?php
namespace App\Http\Controllers\ProductGroup;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductGroup\ProductGroupGetDetailViewRequest;
use App\Http\Requests\ProductGroup\ProductGroupGetEditViewRequest;
use App\Http\Requests\ProductGroup\ProductGroupGetViewRequest;
use App\Http\Requests\ProductGroup\ProductGroupPostCreateAjaxRequest;
use App\Http\Requests\ProductGroup\ProductGroupPostCreateRequest;
use App\Http\Requests\ProductGroup\ProductGroupPostDeleteAjaxRequest;
use App\Http\Requests\ProductGroup\ProductGroupPostDeleteRequest;
use App\Http\Requests\ProductGroup\ProductGroupPostUpdateAjaxRequest;
use App\Http\Requests\ProductGroup\ProductGroupPostUpdateRequest;
use App\Repository\ProductGroup\ProductGroupRepository;

class ProductGroupController extends Controller
{
    /**
     * productgroup repository
     * @var object class
     */
    protected $productgroup;

    public function __construct(ProductGroupRepository $productgroup)
    {
        $this->productgroup = $productgroup;
    }

    /**
     * [getProductGroupListView]
     * @param  ProductGroupGetViewRequest $request [validation]
     * @return view object
     */
    public function getProductGroupListView()
    {
        return $this->productgroup->getViewList();
    }

    /**
     * [getProductGroupDetailView]
     * @param  ProductGroupGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getProductGroupDetailView(ProductGroupGetDetailViewRequest $request)
    {
        return $this->productgroup->getViewDetail($request->id);
    }

    /**
     * [getProductGroupEditView]
     * @param  ProductGroupGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getProductGroupEditView(ProductGroupGetEditViewRequest $request)
    {
        return $this->productgroup->getViewEdit($request->id);
    }

    /**
     * [getProductGroupCreateView]
     * @return view object
     */
    public function getProductGroupCreateView()
    {
        return $this->productgroup->getViewCreate();
    }

    /**
     * [postProductGroupCreate]
     * @param  ProductGroupPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postProductGroupCreate(ProductGroupPostCreateRequest $request)
    {
        $this->productgroup->createData($request->all());
        return redirect()->route('product_group.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductGroupUpdate]
     * @param  ProductGroupPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductGroupUpdate(ProductGroupPostUpdateRequest $request)
    {
        $this->productgroup->upadateData($request->all());
        return redirect()->route('product_group.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductGroupDelete]
     * @param  ProductGroupPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postProductGroupDelete(ProductGroupPostDeleteRequest $request)
    {
        $this->productgroup->deleteData($request->id);
        return redirect()->route('product_group.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postProductGroupCreateAjax]
     * @param  ProductGroupPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductGroupCreateAjax(ProductGroupPostCreateAjaxRequest $request)
    {
        $response = $this->productgroup->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductGroupUpdateAjax]
     * @param  ProductGroupPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductGroupUpdateAjax(ProductGroupPostUpdateAjaxRequest $request)
    {
        $response = $this->productgroup->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postProductGroupDeleteAjax]
     * @param  ProductGroupPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postProductGroupDeleteAjax(ProductGroupPostDeleteAjaxRequest $request)
    {
        $response = $this->productgroup->deleteData($request->id);
        return response()->json($response);
    }

}
