<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A representation of a PowerShell script that is used to install a Win32 app on an end-user device managed by Intune.
*/
class Win32LobAppInstallPowerShellScript extends Win32LobAppScript implements Parsable 
{
    /**
     * Instantiates a new Win32LobAppInstallPowerShellScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppInstallPowerShellScript');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppInstallPowerShellScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppInstallPowerShellScript {
        return new Win32LobAppInstallPowerShellScript();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
