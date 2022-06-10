<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditActivityInitiator implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AppIdentity|null $app If the actor initiating the activity is an app, this property indicates all its identification information including appId, displayName, servicePrincipalId, and servicePrincipalName.
    */
    private ?AppIdentity $app = null;
    
    /**
     * @var UserIdentity|null $user If the actor initiating the activity is a user, this property indicates their identification information including their id, displayName, and userPrincipalName.
    */
    private ?UserIdentity $user = null;
    
    /**
     * Instantiates a new auditActivityInitiator and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditActivityInitiator
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditActivityInitiator {
        return new AuditActivityInitiator();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the app property value. If the actor initiating the activity is an app, this property indicates all its identification information including appId, displayName, servicePrincipalId, and servicePrincipalName.
     * @return AppIdentity|null
    */
    public function getApp(): ?AppIdentity {
        return $this->app;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'app' => function (ParseNode $n) use ($o) { $o->setApp($n->getObjectValue(array(AppIdentity::class, 'createFromDiscriminatorValue'))); },
            'user' => function (ParseNode $n) use ($o) { $o->setUser($n->getObjectValue(array(UserIdentity::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the user property value. If the actor initiating the activity is a user, this property indicates their identification information including their id, displayName, and userPrincipalName.
     * @return UserIdentity|null
    */
    public function getUser(): ?UserIdentity {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('app', $this->app);
        $writer->writeObjectValue('user', $this->user);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the app property value. If the actor initiating the activity is an app, this property indicates all its identification information including appId, displayName, servicePrincipalId, and servicePrincipalName.
     *  @param AppIdentity|null $value Value to set for the app property.
    */
    public function setApp(?AppIdentity $value ): void {
        $this->app = $value;
    }

    /**
     * Sets the user property value. If the actor initiating the activity is a user, this property indicates their identification information including their id, displayName, and userPrincipalName.
     *  @param UserIdentity|null $value Value to set for the user property.
    */
    public function setUser(?UserIdentity $value ): void {
        $this->user = $value;
    }

}
