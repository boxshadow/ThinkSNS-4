<?php

/**
 *
 * @author jason
 *
 */
require_once 'BaseApi.class.php';
class ForumApi extends BaseApi
{
    //获取全部版块
    public function forumindex()
    {
        $content = $this->getContentFormDiscuz('forumindex');

        return $content;
    }

    //获取热门版块
    public function hotforum()
    {
        $content = $this->getContentFormDiscuz('hotforum');

        return $content;
    }

    //获取热门帖子
    public function hotthread()
    {
        $content = $this->getContentFormDiscuz('hotthread');

        return $content;
    }

    public function toplist()
    {
        $fid = intval($this->data['fid']);

        $content = $this->getContentFormDiscuz('hotthread', '&fid='.$fid);

        return $content;
    }

    //获取版块帖子
    public function forumdisplay()
    {
        $fid = $this->data['fid'];
        $page = $this->data['page'] ? $this->data['page'] : 1;
        $limit = $this->data['limit'] ? $this->data['limit'] : 20;
        $submodule = $this->data['submodule'] ? $this->data['submodule'] : 'checkpost';
        $order = $this->data['order'] ? $this->data['order'] : 'lastpost'; // lastpost 最后回复  dateline 发贴时间

        $opt = '&fid='.$fid.'&page='.$page.'&tpp='.$limit.'&submodule='.$submodule.'&orderby='.$order;

        $content = $this->getContentFormDiscuz('forumdisplay', $opt);

        return $content;
    }

    //获取帖子详情
    public function viewthread()
    {
        $tid = $this->data['tid'];
        $page = $this->data['page'] ? $this->data['page'] : 1;
        $limit = $this->data['limit'] ? $this->data['limit'] : 20;
        $submodule = $this->data['submodule'] ? $this->data['submodule'] : 'checkpost';

        $opt = '&tid='.$fid.'&page='.$page.'&tpp='.$limit.'&submodule='.$submodule;

        $content = $this->getContentFormDiscuz('viewthread', $opt);

        return $content;
    }

/*"POST index.php?module=newthread&version=1&fid=40&topicsubmit=yes&mobile=no  TODO */
    //发布新贴
    public function addthread()
    {
        $fid = intval($this->data['fid']);
        $content = $this->getContentFormDiscuz('newthread', '&topicsubmit=yes&fid='.$fid, 'POST');

        return $content;
    }

    //回复帖子
    public function sendreply()
    {
        //index.php?module=sendreply&version=1&tid=4&replysubmit=yes&mobile=no
    }

    //收藏帖子
    public function favthread()
    {
        //"POST index.php?module=favthread&version=1&id=4&favoritesubmit=true&mobile=no
    }

    //收藏版块
    public function favforum()
    {
        // "GET index.php?module=favforum&version=1&id=40&mobile=no
    }
}
