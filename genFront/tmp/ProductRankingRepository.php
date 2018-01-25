<?php
/**
 * @author samrark@chisanguan
 * @email samarkchsngn@gmail.com
 */
namespace App\Repository\ProductRanking;

use App\Repository\BaseRepositoryWrap;

class ProductRankingRepository extends BaseRepositoryWrap
{
    /**
     * set title name default
     * @var string
     */
    protected $name = 'product-ranking';

    /**
     * overriding limit.
     * @var integer
     */
    protected $limit = 5;

    /**
     * overriding orderBy column
     * @var string
     */
    protected $orderBy = 'id';

    /**
     * overriding sortType
     * @var string
     */
    protected $sortType = 'asc';

    /**
     * setting config endpoint api
     * @var array
     */
    protected $configEndpoint = [
        'list' => '/product-ranking/list',
        'create' => '/product-ranking/create',
        'update' => '/product-ranking/update',
        'delete' => '/product-ranking/delete',
    ];

    /**
     * set config blade view file
     * @var array
     */
    protected $configView = [
        'list' => 'productranking.list',
        'edit' => 'productranking.edit',
        'create' => 'productranking.create',
        'detail' => 'productranking.detail',
    ];

    /**
     * set attribute of image
     * @var array
     */
    protected $imageList = [
        'products_images' => '',
    ];

    /**
     * set accept application json api
     * @var boolean
     */
    protected $isJson = true;

    /**
     * set params request.
     * @var array
     */
    protected $params;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [getViewDetail description]
     * @param  integer $id [description]
     * @return mixed
     */
    public function getViewDetail($id = 0)
    {
        $data = parent::getDataByID($id);
        return parent::getViewDetail($data);
    }

    /**
     * [getViewEdit description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function getViewEdit($id = 0)
    {
        $data = parent::getDataByID($id);
        return parent::getViewEdit($data);
    }

    /**
     * [getViewList description]
     * @param  array  $params [description]
     * @return [type]         [description]
     */
    public function getViewList($params = array())
    {
        $data = parent::getDataList($params);
        return parent::getViewList($data);
    }

    /**
     * wrapper param on this function
     * @param  $params array
     * @return $params array
     */
    public function intialParam($params)
    {
        # do warpper here
        $this->params = $params;
        return $this;
    }

    /**
     * overriding shared variable for view.
     * @return mixed.
     */
    public function getShareViewData()
    {
        parent::getShareViewData();
        // custom shared global variable
        $this->sharedView['package'] = ['data' => 'simple'];
        $this->sharedView['title'] = $this->name;
    }

}
