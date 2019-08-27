<?php
/**
 * Copyright 2019 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/storage/README.md
 */

namespace Google\Cloud\Samples\Storage;

# [START storage_deactivate_hmac_key]
use Google\Cloud\Storage\StorageClient;

/**
 * Deactivate HMAC key.
 *
 * @param string $accessId access ID for an inactive HMAC key.
 *
 */
function deactivate_hmac_key($accessId)
{
    $storage = new StorageClient();
    // By default hmacKey will use the projectId used by StorageClient().
    $hmacKey = $storage->hmacKey($accessId);

    $hmacKey = $hmacKey->update('INACTIVE');

    print("The HMAC key is now inactive.");
    printf("HMAC key Metadata: %s" . PHP_EOL, print_r($hmacKey->info()));
}
# [END storage_deactivate_hmac_key]
