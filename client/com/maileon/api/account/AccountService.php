<?php

/**
 * Facade that wraps the REST service for accounts.
 *
 * @author Marcus Beckerle | XQueue GmbH | <a href="mailto:marcus.beckerle@xqueue.com">marcus.beckerle@xqueue.com</a>
 */
class com_maileon_api_account_AccountService extends com_maileon_api_AbstractMaileonService
{



    /**
     * Get list of all account placeholders.
     *
     * @return com_maileon_api_MaileonAPIResult
     */
    function getAccountPlaceholders()
    {
        return $this->get("account/placeholders");
    }


    /**
     * Sets the list of account placeholders. All current account placeholders will be overwritten or removed, if not contained in the new array
     *
     * @param array $accountPlaceholders Array of com_maileon_api_account_AccountPlaceholder or single account placeholder
     * @return com_maileon_api_MaileonAPIResult
     */
    function setAccountPlaceholders($accountPlaceholders)
    {
        $xml = new SimpleXMLElement("<?xml version=\"1.0\"?><account_placeholders></account_placeholders>");

        if (is_array($accountPlaceholders)) {
            foreach ($accountPlaceholders as $accountPlaceholder) {
                $this->sxml_append($xml, $accountPlaceholder->toXML());
            }
        } else {
            $this->sxml_append($xml, $accountPlaceholders->toXML());
        }

        return $this->post("account/placeholders", $xml->asXML());
    }


    /**
     * Update account placeholders. If account placeholder is not existing yet, it will be added. If account placeholder with given name is avaliable the value will be updated. Other existing account placeholders will not be touched.
     *
     * @param array $accountPlaceholders Array of com_maileon_api_account_AccountPlaceholder or single account placeholder
     * @return com_maileon_api_MaileonAPIResult
     */
    function updateAccountPlaceholders($accountPlaceholders)
    {
        $xml = new SimpleXMLElement("<?xml version=\"1.0\"?><account_placeholders></account_placeholders>");

        if (is_array($accountPlaceholders)) {
            foreach ($accountPlaceholders as $accountPlaceholder) {
                $this->sxml_append($xml, $accountPlaceholder->toXML());
            }
        } else {
            $this->sxml_append($xml, $accountPlaceholders->toXML());
        }

        return $this->put("account/placeholders", $xml->asXML());
    }


    /**
     * Delete account placeholder with requested {@code name}
     *
     * @param string $name The name of the property to delete
     * @return com_maileon_api_MaileonAPIResult
     */
    function deleteAccountPlaceholder($name)
    {

        $queryParameters = array(
            'name' => $name,
        );

        return $this->delete("account/placeholders", $queryParameters);
    }


    function sxml_append(SimpleXMLElement $to, SimpleXMLElement $from)
    {
        $toDom = dom_import_simplexml($to);
        $fromDom = dom_import_simplexml($from);
        $toDom->appendChild($toDom->ownerDocument->importNode($fromDom, true));
    }
}