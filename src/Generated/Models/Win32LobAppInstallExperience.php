<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppInstallExperience implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Win32LobAppRestartBehavior|null $deviceRestartBehavior Device restart behavior. Possible values are: basedOnReturnCode, allow, suppress, force.
    */
    private ?Win32LobAppRestartBehavior $deviceRestartBehavior = null;
    
    /**
     * @var RunAsAccountType|null $runAsAccount Indicates the type of execution context the app runs in. Possible values are: system, user.
    */
    private ?RunAsAccountType $runAsAccount = null;
    
    /**
     * Instantiates a new win32LobAppInstallExperience and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppInstallExperience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppInstallExperience {
        return new Win32LobAppInstallExperience();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceRestartBehavior property value. Device restart behavior. Possible values are: basedOnReturnCode, allow, suppress, force.
     * @return Win32LobAppRestartBehavior|null
    */
    public function getDeviceRestartBehavior(): ?Win32LobAppRestartBehavior {
        return $this->deviceRestartBehavior;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceRestartBehavior' => function (ParseNode $n) use ($o) { $o->setDeviceRestartBehavior($n->getEnumValue(Win32LobAppRestartBehavior::class)); },
            'runAsAccount' => function (ParseNode $n) use ($o) { $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)); },
        ];
    }

    /**
     * Gets the runAsAccount property value. Indicates the type of execution context the app runs in. Possible values are: system, user.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        return $this->runAsAccount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('deviceRestartBehavior', $this->deviceRestartBehavior);
        $writer->writeEnumValue('runAsAccount', $this->runAsAccount);
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
     * Sets the deviceRestartBehavior property value. Device restart behavior. Possible values are: basedOnReturnCode, allow, suppress, force.
     *  @param Win32LobAppRestartBehavior|null $value Value to set for the deviceRestartBehavior property.
    */
    public function setDeviceRestartBehavior(?Win32LobAppRestartBehavior $value ): void {
        $this->deviceRestartBehavior = $value;
    }

    /**
     * Sets the runAsAccount property value. Indicates the type of execution context the app runs in. Possible values are: system, user.
     *  @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value ): void {
        $this->runAsAccount = $value;
    }

}
