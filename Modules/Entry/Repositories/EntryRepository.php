<?php namespace Modules\Entry\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface EntryRepository extends BaseRepository
{
    /**
     * @param int $limit
     * @return object
     */
    public function notAccepted($limit = 50);

    /**
     * @param string $email
     * @return object
     */
    public function findByEmail($email);

    /**
     * @param $email
     * @return mixed
     */
    public function subscribe($email);

    /**
     * Invite the given entry
     * @param object $entry
     * @return bool
     */
    public function invite($entry);

    /**
     * Count amount of entries
     * @return int
     */
    public function countAll();

    /**
     * Count all entries not invited yet
     * @return int
     */
    public function countTotalNotInvited();

    /**
     * Count all entries that are accepted and have completed the invitation
     * @return int
     */
    public function countAcceptedAndCompleted();

    /**
     * Count all entries that are accepted and have not completed the invitation
     * @return int
     */
    public function countAcceptedAndNotCompleted();
}
