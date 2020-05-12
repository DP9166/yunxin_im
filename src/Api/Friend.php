<?php

namespace YunXinHelper\Api;

use YunXinHelper\Exception\YunXinArgException;
use YunXinHelper\Exception\YunXinBusinessException;
use YunXinHelper\Exception\YunXinInnerException;
use YunXinHelper\Exception\YunXinNetworkException;

class Friend extends \YunXinHelper\Api\Base
{
    /**
     * 用户关注
     * @param  string  $accid
     * @param  string  $faccid
     * @param  int     $type
     * @return array
     * @throws YunXinArgException
     * @throws GuzzleException
     * @throws YunXinBusinessException
     * @throws YunXinNetworkException
     * @throws YunXinInnerException
     */
    public function focus($accid, $faccid, $type)
    {
        $res = $this->sendRequest('friend/add.action', [
            'accid'     => $accid,
            'faccid'    => $faccid,
            'type'      => $type
        ]);
        return $res;
    }

    /**
     * 删除好友
     * @param  string  $accid
     * @param  string  $faccid
     * @return array
     * @throws YunXinArgException
     * @throws GuzzleException
     * @throws YunXinBusinessException
     * @throws YunXinNetworkException
     * @throws YunXinInnerException
     */
    public function delete($accid, $faccid)
    {
        $res = $this->sendRequest('friend/delete.action', [
            'accid'     => $accid,
            'faccid'    => $faccid,
        ]);
        return $res;
    }

}