<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Contact;

/**
 * Class ContactRepository
 *
 * @package App\Repositories
 */
class ContactRepository extends BaseRepository
{
    /**
     * @var array|string[]
     */
    protected array $fillable = [
        'name'
    ];

    /**
     * ContactRepository constructor.
     *
     * @param Contact $category
     */
    public function __construct(Contact $category)
    {
        $this->model = $category;
    }
}
