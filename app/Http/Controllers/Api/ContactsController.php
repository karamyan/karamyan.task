<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Services\ContactService;

/**
 * Class ContactsController
 *
 * @package App\Http\Controllers\Api
 */
class ContactsController extends CRUDController
{
    /**
     * ContactsController constructor.
     *
     * @param ContactService $contactService
     */
    public function __construct(ContactService $contactService)
    {
        parent::__construct($contactService);
    }
}
