<?php
/**
 * Created by PhpStorm.
 * User: tsingsun
 * Date: 2017/7/1
 * Time: 上午10:48
 */

namespace yii\db;


use yii\base\NotSupportedException;

/**
 * this is used for cursor based Pagination.
 * use it like :
 *
 * $query = (new Query())->from('customer')->select('id')->orderBy('id');
 * $query->limit(10)->offset(new CursorBasedExpression(1));
 *
 * @package yii\db
 */
class CursorBasedExpression extends Expression
{
    public $cursorFieldName = 'cursor_row_number';

    public $isAfterCursor;

    public $cursor;
    /**
     * PaginationExpression constructor.
     * @param string $cursor
     * @param bool $isAfterCursor
     * @param array $config
     */
    public function __construct($cursor,$isAfterCursor = true,$config = [])
    {
        $this->isAfterCursor = $isAfterCursor;
        $this->cursor = $cursor;
        parent::__construct($config);

    }

    public function __toString()
    {
        throw new NotSupportedException('cursor based expression does not support trans string');
    }
}