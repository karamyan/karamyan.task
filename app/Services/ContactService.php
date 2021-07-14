<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ContactRepository;
use App\Services\CRUDService\CRUDAbstract;

/**
 * Class ContactService
 *
 * @package App\Services
 */
class ContactService extends CRUDAbstract
{
    /**
     * @var ContactRepository
     */
    protected $repository;

    /**
     * ContactService constructor.
     *
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
         $this->repository = $contactRepository;
    }
}
