<?php
namespace App\Http\Controllers\SearchResult;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchResult\SearchResultGetDetailViewRequest;
use App\Http\Requests\SearchResult\SearchResultGetEditViewRequest;
use App\Http\Requests\SearchResult\SearchResultGetViewRequest;
use App\Http\Requests\SearchResult\SearchResultPostCreateAjaxRequest;
use App\Http\Requests\SearchResult\SearchResultPostCreateRequest;
use App\Http\Requests\SearchResult\SearchResultPostDeleteAjaxRequest;
use App\Http\Requests\SearchResult\SearchResultPostDeleteRequest;
use App\Http\Requests\SearchResult\SearchResultPostUpdateAjaxRequest;
use App\Http\Requests\SearchResult\SearchResultPostUpdateRequest;
use App\Repository\SearchResult\SearchResultRepository;

class SearchResultController extends Controller
{
    /**
     * searchresult repository
     * @var object class
     */
    protected $searchresult;

    public function __construct(SearchResultRepository $searchresult)
    {
        $this->searchresult = $searchresult;
    }

    /**
     * [getSearchResultListView]
     * @param  SearchResultGetViewRequest $request [validation]
     * @return view object
     */
    public function getSearchResultListView()
    {
        return $this->searchresult->getViewList();
    }

    /**
     * [getSearchResultDetailView]
     * @param  SearchResultGetDetailViewRequest $request [validation]
     * @return view object
     */
    public function getSearchResultDetailView(SearchResultGetDetailViewRequest $request)
    {
        return $this->searchresult->getViewDetail($request->id);
    }

    /**
     * [getSearchResultEditView]
     * @param  SearchResultGetEditViewRequest $request [validate]
     * @return view object
     */
    public function getSearchResultEditView(SearchResultGetEditViewRequest $request)
    {
        return $this->searchresult->getViewEdit($request->id);
    }

    /**
     * [getSearchResultCreateView]
     * @return view object
     */
    public function getSearchResultCreateView()
    {
        return $this->searchresult->getViewCreate();
    }

    /**
     * [postSearchResultCreate]
     * @param  SearchResultPostCreateRequest $request [validate]
     * @return redirect
     */
    public function postSearchResultCreate(SearchResultPostCreateRequest $request)
    {
        $this->searchresult->createData($request->all());
        return redirect()->route('search_result.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postSearchResultUpdate]
     * @param  SearchResultPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postSearchResultUpdate(SearchResultPostUpdateRequest $request)
    {
        $this->searchresult->upadateData($request->all());
        return redirect()->route('search_result.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postSearchResultDelete]
     * @param  SearchResultPostUpdateRequest $request [validate]
     * @return redirect
     */
    public function postSearchResultDelete(SearchResultPostDeleteRequest $request)
    {
        $this->searchresult->deleteData($request->id);
        return redirect()->route('search_result.list')
            ->with(['message' => trans('alert.success')]);
    }

    /**
     * [postSearchResultCreateAjax]
     * @param  SearchResultPostCreateAjaxRequest $request [validate]
     * @return object json
     */
    public function postSearchResultCreateAjax(SearchResultPostCreateAjaxRequest $request)
    {
        $response = $this->searchresult->createData($request->all());
        return response()->json($response);
    }

    /**
     * [postSearchResultUpdateAjax]
     * @param  SearchResultPostUpdateAjaxRequest $request [validate]
     * @return object json
     */
    public function postSearchResultUpdateAjax(SearchResultPostUpdateAjaxRequest $request)
    {
        $response = $this->searchresult->upadateData($request->all());
        return response()->json($response);
    }

    /**
     * [postSearchResultDeleteAjax]
     * @param  SearchResultPostDeleteAjaxRequest $request [validate]
     * @return object json
     */
    public function postSearchResultDeleteAjax(SearchResultPostDeleteAjaxRequest $request)
    {
        $response = $this->searchresult->deleteData($request->id);
        return response()->json($response);
    }

}
