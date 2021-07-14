<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Services\ContactNoteService;
use App\Services\ContactService;
use Illuminate\Http\Request;

/**
 * Class ContactsController
 *
 * @package App\Http\Controllers\Api
 */
class ContactsController extends CRUDController
{
    /**
     * @var ContactService
     */
    private $contactService;
    /**
     * ContactsController constructor.
     *
     * @param ContactService $contactService
     */
    public function __construct(ContactService $contactService, ContactNoteService $contactNoteService)
    {
        parent::__construct($contactService);
        $this->contactService = $contactService;
        $this->contactNoteService = $contactNoteService;
    }

    /**
     * @param Request $request
     * @param int     $contactId
     *
     * @return mixed
     */
    public function createContactNote(Request $request, int $contactId)
    {
        return $this->contactNoteService->createContactNote($request, $contactId);
    }

    /**
     * @param int $noteId
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteNote(int $noteId)
    {
        return $this->contactNoteService->delete($noteId);
    }

    /**
     * @param Request $request
     * @param int     $noteId
     *
     * @return \Illuminate\Http\Response
     */
    public function updateNote(Request $request, int $noteId)
    {
        return $this->contactNoteService->update($request, $noteId);
    }
}
