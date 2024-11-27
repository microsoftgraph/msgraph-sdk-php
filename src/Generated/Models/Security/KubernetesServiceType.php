<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class KubernetesServiceType extends Enum {
    public const UNKNOWN = "unknown";
    public const CLUSTER_I_P = "clusterIP";
    public const EXTERNAL_NAME = "externalName";
    public const NODE_PORT = "nodePort";
    public const LOAD_BALANCER = "loadBalancer";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
