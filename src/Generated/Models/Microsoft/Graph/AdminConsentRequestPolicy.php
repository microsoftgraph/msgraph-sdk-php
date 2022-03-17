<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminConsentRequestPolicy extends Entity 
{
    /** @var bool|null $isEnabled Specifies whether the admin consent request feature is enabled or disabled. Required. */
    private ?bool $isEnabled = null;
    
    /** @var bool|null $notifyReviewers Specifies whether reviewers will receive notifications. Required. */
    private ?bool $notifyReviewers = null;
    
    /** @var bool|null $remindersEnabled Specifies whether reviewers will receive reminder emails. Required. */
    private ?bool $remindersEnabled = null;
    
    /** @var int|null $requestDurationInDays Specifies the duration the request is active before it automatically expires if no decision is applied. */
    private ?int $requestDurationInDays = null;
    
    /** @var array<AccessReviewReviewerScope>|null $reviewers The list of reviewers for the admin consent. Required. */
    private ?array $reviewers = null;
    
    /** @var int|null $version Specifies the version of this policy. When the policy is updated, this version is updated. Read-only. */
    private ?int $version = null;
    
    /**
     * Instantiates a new adminConsentRequestPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminConsentRequestPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AdminConsentRequestPolicy {
        return new AdminConsentRequestPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
            'notifyReviewers' => function (self $o, ParseNode $n) { $o->setNotifyReviewers($n->getBooleanValue()); },
            'remindersEnabled' => function (self $o, ParseNode $n) { $o->setRemindersEnabled($n->getBooleanValue()); },
            'requestDurationInDays' => function (self $o, ParseNode $n) { $o->setRequestDurationInDays($n->getIntegerValue()); },
            'reviewers' => function (self $o, ParseNode $n) { $o->setReviewers($n->getCollectionOfObjectValues(AccessReviewReviewerScope::class)); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the isEnabled property value. Specifies whether the admin consent request feature is enabled or disabled. Required.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the notifyReviewers property value. Specifies whether reviewers will receive notifications. Required.
     * @return bool|null
    */
    public function getNotifyReviewers(): ?bool {
        return $this->notifyReviewers;
    }

    /**
     * Gets the remindersEnabled property value. Specifies whether reviewers will receive reminder emails. Required.
     * @return bool|null
    */
    public function getRemindersEnabled(): ?bool {
        return $this->remindersEnabled;
    }

    /**
     * Gets the requestDurationInDays property value. Specifies the duration the request is active before it automatically expires if no decision is applied.
     * @return int|null
    */
    public function getRequestDurationInDays(): ?int {
        return $this->requestDurationInDays;
    }

    /**
     * Gets the reviewers property value. The list of reviewers for the admin consent. Required.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the version property value. Specifies the version of this policy. When the policy is updated, this version is updated. Read-only.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeBooleanValue('notifyReviewers', $this->notifyReviewers);
        $writer->writeBooleanValue('remindersEnabled', $this->remindersEnabled);
        $writer->writeIntegerValue('requestDurationInDays', $this->requestDurationInDays);
        $writer->writeCollectionOfObjectValues('reviewers', $this->reviewers);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the isEnabled property value. Specifies whether the admin consent request feature is enabled or disabled. Required.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the notifyReviewers property value. Specifies whether reviewers will receive notifications. Required.
     *  @param bool|null $value Value to set for the notifyReviewers property.
    */
    public function setNotifyReviewers(?bool $value ): void {
        $this->notifyReviewers = $value;
    }

    /**
     * Sets the remindersEnabled property value. Specifies whether reviewers will receive reminder emails. Required.
     *  @param bool|null $value Value to set for the remindersEnabled property.
    */
    public function setRemindersEnabled(?bool $value ): void {
        $this->remindersEnabled = $value;
    }

    /**
     * Sets the requestDurationInDays property value. Specifies the duration the request is active before it automatically expires if no decision is applied.
     *  @param int|null $value Value to set for the requestDurationInDays property.
    */
    public function setRequestDurationInDays(?int $value ): void {
        $this->requestDurationInDays = $value;
    }

    /**
     * Sets the reviewers property value. The list of reviewers for the admin consent. Required.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value ): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the version property value. Specifies the version of this policy. When the policy is updated, this version is updated. Read-only.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
