<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 16.10.2017
 * Time: 16:56
 */

namespace IhorRadchenko\App\Models;

use IhorRadchenko\App\DataBase;
use IhorRadchenko\App\Exceptions\DbException;
use IhorRadchenko\App\Model;

/**
 * Class Category
 * @package App\Models
 * Реализует модель таблицы categories
 * @property int $countNews
 * @property string $link
 * @property Page $page
 */
class Category extends Model
{
    const TABLE = 'categories';

    const PER_PAGE = 5;

    public $name;
    private $page_id;

    protected $fields = [
        'name' => '',
        'page_id' => ''
    ];

    public function __isset($name)
    {
        switch ($name) {
            case 'countNews':
                return true;
                break;
            case 'page':
            case 'link':
                return isset($this->page_id);
                break;
            default:
                return false;
        }
    }

    /**
     * @param $name
     * @return bool|string
     * @throws DbException
     */
    public function __get($name)
    {
        switch ($name) {
            case 'countNews':
                return DataBase::getInstance()->countRow('SELECT COUNT(*) FROM news WHERE category_id = ' . $this->id);
            case 'link':
                return Page::findById($this->page_id)->getLink();
                break;
            case 'page':
                return Page::findById($this->page_id);
                break;
            default:
                return false;
        }
    }

    /**
     * @param string $link
     * @return array|null
     * @throws DbException
     */
    public static function findByLink(string $link)
    {
        $sql = 'SELECT * FROM categories WHERE page_id = (SELECT id FROM pages WHERE link = :link)';
        $result = DataBase::getInstance()->query($sql, self::class, ['link' => $link]);
        return ! empty($result) ? $result : null;
    }

    /**
     * @return bool
     * @throws DbException
     */
    public function delete(): bool
    {
        $this->page->delete();
        $articles = Article::findByCategory($this->link);
        if ($articles) {
            foreach ($articles as $article) {
                $article->delete();
            }
        }
        return parent::delete(); // TODO: Change the autogenerated stub
    }
}