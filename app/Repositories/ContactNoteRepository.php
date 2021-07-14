<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\ContactNote;

/**
 * Class ContactNoteRepository
 *
 * @package App\Repositories
 */
class ContactNoteRepository
{
    /**
     * @var array|string[]
     */
    protected array $fillable = [
        'notes'
    ];

    /**
     * ContactNoteRepository constructor.
     *
     * @param ContactNote $category
     */
    public function __construct(ContactNote $category)
    {
        $this->model = $category;
    }
}
