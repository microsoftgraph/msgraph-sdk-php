<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Artifact extends Entity implements Parsable 
{
    /**
     * Instantiates a new Artifact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Artifact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Artifact {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.host': return new Host();
                case '#microsoft.graph.security.hostComponent': return new HostComponent();
                case '#microsoft.graph.security.hostCookie': return new HostCookie();
                case '#microsoft.graph.security.hostname': return new Hostname();
                case '#microsoft.graph.security.hostSslCertificate': return new HostSslCertificate();
                case '#microsoft.graph.security.hostTracker': return new HostTracker();
                case '#microsoft.graph.security.ipAddress': return new IpAddress();
                case '#microsoft.graph.security.passiveDnsRecord': return new PassiveDnsRecord();
                case '#microsoft.graph.security.sslCertificate': return new SslCertificate();
                case '#microsoft.graph.security.unclassifiedArtifact': return new UnclassifiedArtifact();
            }
        }
        return new Artifact();
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
