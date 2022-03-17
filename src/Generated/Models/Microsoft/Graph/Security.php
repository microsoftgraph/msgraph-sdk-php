<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Security extends Entity 
{
    /** @var array<Alert>|null $alerts Read-only. Nullable. */
    private ?array $alerts = null;
    
    /** @var array<SecureScoreControlProfile>|null $secureScoreControlProfiles  */
    private ?array $secureScoreControlProfiles = null;
    
    /** @var array<SecureScore>|null $secureScores  */
    private ?array $secureScores = null;
    
    /**
     * Instantiates a new security and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Security
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Security {
        return new Security();
    }

    /**
     * Gets the alerts property value. Read-only. Nullable.
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        return $this->alerts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'alerts' => function (self $o, ParseNode $n) { $o->setAlerts($n->getCollectionOfObjectValues(Alert::class)); },
            'secureScoreControlProfiles' => function (self $o, ParseNode $n) { $o->setSecureScoreControlProfiles($n->getCollectionOfObjectValues(SecureScoreControlProfile::class)); },
            'secureScores' => function (self $o, ParseNode $n) { $o->setSecureScores($n->getCollectionOfObjectValues(SecureScore::class)); },
        ]);
    }

    /**
     * Gets the secureScoreControlProfiles property value. 
     * @return array<SecureScoreControlProfile>|null
    */
    public function getSecureScoreControlProfiles(): ?array {
        return $this->secureScoreControlProfiles;
    }

    /**
     * Gets the secureScores property value. 
     * @return array<SecureScore>|null
    */
    public function getSecureScores(): ?array {
        return $this->secureScores;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alerts', $this->alerts);
        $writer->writeCollectionOfObjectValues('secureScoreControlProfiles', $this->secureScoreControlProfiles);
        $writer->writeCollectionOfObjectValues('secureScores', $this->secureScores);
    }

    /**
     * Sets the alerts property value. Read-only. Nullable.
     *  @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value ): void {
        $this->alerts = $value;
    }

    /**
     * Sets the secureScoreControlProfiles property value. 
     *  @param array<SecureScoreControlProfile>|null $value Value to set for the secureScoreControlProfiles property.
    */
    public function setSecureScoreControlProfiles(?array $value ): void {
        $this->secureScoreControlProfiles = $value;
    }

    /**
     * Sets the secureScores property value. 
     *  @param array<SecureScore>|null $value Value to set for the secureScores property.
    */
    public function setSecureScores(?array $value ): void {
        $this->secureScores = $value;
    }

}
