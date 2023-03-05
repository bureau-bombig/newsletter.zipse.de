<?php

/**
 * Facade that wraps the REST service for blacklists.
 *
 */
class com_maileon_api_blacklists_BlacklistsService extends com_maileon_api_AbstractMaileonService
{

    /**
     * Retrieves the names and IDs of the custom blacklists in your account.
     *
     * @return \em com_maileon_api_MaileonAPIResult
     *    the result object of the API call, with a com_maileon_api_blacklists_Blacklist[] available at com_maileon_api_MaileonAPIResult::getResult()
     * @throws com_maileon_api_MaileonAPIException
     *      if there was a connection problem or a server error occurred
     */
    public function getBlacklists()
    {
        return $this->get("blacklists");
    }

    /**
     * Retrieves a full blacklist (including entries) by id.
     *
     * @param integer $id
     *        the id of the blacklist to retrieve
     * @return \em com_maileon_api_MaileonAPIResult
     *        the result object of the API call, with the requested com_maileon_api_blacklists_Blacklist available at com_maileon_api_MaileonAPIResult::getResult()
     * @throws com_maileon_api_MaileonAPIException
     *      if there was a connection problem or a server error occurred
     */
    public function getBlacklist($id)
    {
        return $this->get("blacklists/" . $id);
    }

    /**
     * Adds a number of expressions to a blacklist.
     *
     * @param integer $id
     *  the id of the blacklist to add the entries to
     * @param string[] $entries
     *  the blacklist entries to add to the blacklist
     * @param string $importName
     *  a unique name for the import that will be displayed in Maileon's web user interface. If this is null, a unique name will be generated.
     * @return \em com_maileon_api_MaileonAPIResult
     *        the result object of the API call.
     * @throws com_maileon_api_MaileonAPIException
     *      if there was a connection problem or a server error occurred
     */
    public function addEntriesToBlacklist($id, $entries, $importName = null)
    {
        if ($importName == null) {
            $importName = "phpclient_import_" . uniqid();
        }
        $action = new com_maileon_api_blacklists_AddEntriesAction();
        $action->importName = $importName;
        $action->entries = $entries;
        return $this->post("blacklists/" . $id . "/actions", $action->toXMLString());
    }

}