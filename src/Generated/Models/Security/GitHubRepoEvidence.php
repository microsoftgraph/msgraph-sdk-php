<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GitHubRepoEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new GitHubRepoEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.gitHubRepoEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GitHubRepoEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GitHubRepoEvidence {
        return new GitHubRepoEvidence();
    }

    /**
     * Gets the baseUrl property value. The baseUrl property
     * @return string|null
    */
    public function getBaseUrl(): ?string {
        $val = $this->getBackingStore()->get('baseUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baseUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'baseUrl' => fn(ParseNode $n) => $o->setBaseUrl($n->getStringValue()),
            'login' => fn(ParseNode $n) => $o->setLogin($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'ownerType' => fn(ParseNode $n) => $o->setOwnerType($n->getStringValue()),
            'repoId' => fn(ParseNode $n) => $o->setRepoId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the login property value. The login property
     * @return string|null
    */
    public function getLogin(): ?string {
        $val = $this->getBackingStore()->get('login');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'login'");
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the ownerType property value. The ownerType property
     * @return string|null
    */
    public function getOwnerType(): ?string {
        $val = $this->getBackingStore()->get('ownerType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerType'");
    }

    /**
     * Gets the repoId property value. The repoId property
     * @return string|null
    */
    public function getRepoId(): ?string {
        $val = $this->getBackingStore()->get('repoId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'repoId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('baseUrl', $this->getBaseUrl());
        $writer->writeStringValue('login', $this->getLogin());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeStringValue('ownerType', $this->getOwnerType());
        $writer->writeStringValue('repoId', $this->getRepoId());
    }

    /**
     * Sets the baseUrl property value. The baseUrl property
     * @param string|null $value Value to set for the baseUrl property.
    */
    public function setBaseUrl(?string $value): void {
        $this->getBackingStore()->set('baseUrl', $value);
    }

    /**
     * Sets the login property value. The login property
     * @param string|null $value Value to set for the login property.
    */
    public function setLogin(?string $value): void {
        $this->getBackingStore()->set('login', $value);
    }

    /**
     * Sets the owner property value. The owner property
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the ownerType property value. The ownerType property
     * @param string|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?string $value): void {
        $this->getBackingStore()->set('ownerType', $value);
    }

    /**
     * Sets the repoId property value. The repoId property
     * @param string|null $value Value to set for the repoId property.
    */
    public function setRepoId(?string $value): void {
        $this->getBackingStore()->set('repoId', $value);
    }

}
