<?php
namespace Webkul\Category\Repositories;

use Webkul\Core\Eloquent\Repository;

class CategoryRepository extends Repository
{
    /**
     * Specify the Model class name
     *
     * @return string
     */
    function model(): string
    {
        return 'Webkul\Category\Contracts\Category';
    }
}
