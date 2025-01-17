<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class UsageProject extends Model
{
    public function __construct()
    {
        $this
            ->addRule('executionsTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated number of function executions.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('documentsTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated  number of documents.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('databasesTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated number of databases.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('databasesStorageTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated sum of databases storage size (in bytes).',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('usersTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated number of users.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('filesStorageTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated sum of files storage size (in bytes).',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('functionsStorageTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated sum of functions storage size (in bytes).',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('buildsStorageTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated sum of builds storage size (in bytes).',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('deploymentsStorageTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated sum of deployments storage size (in bytes).',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('bucketsTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated number of buckets.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('executionsMbSecondsTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated number of function executions mbSeconds.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('buildsMbSecondsTotal', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Total aggregated number of function builds mbSeconds.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('requests', [
                'type' => Response::MODEL_METRIC,
                'description' => 'Aggregated  number of requests per period.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('network', [
                'type' => Response::MODEL_METRIC,
                'description' => 'Aggregated number of consumed bandwidth per period.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('users', [
                'type' => Response::MODEL_METRIC,
                'description' => 'Aggregated number of users per period.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('executions', [
                'type' => Response::MODEL_METRIC,
                'description' => 'Aggregated number of executions per period.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('executionsBreakdown', [
                'type' => Response::MODEL_METRIC_BREAKDOWN,
                'description' => 'Aggregated breakdown in totals of executions by functions.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('bucketsBreakdown', [
                'type' => Response::MODEL_METRIC_BREAKDOWN,
                'description' => 'Aggregated breakdown in totals of usage by buckets.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('databasesStorageBreakdown', [
                'type' => Response::MODEL_METRIC_BREAKDOWN,
                'description' => 'An array of the aggregated breakdown of storage usage by databases.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('executionsMbSecondsBreakdown', [
                'type' => Response::MODEL_METRIC_BREAKDOWN,
                'description' => 'Aggregated breakdown in totals of execution mbSeconds by functions.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('buildsMbSecondsBreakdown', [
                'type' => Response::MODEL_METRIC_BREAKDOWN,
                'description' => 'Aggregated breakdown in totals of build mbSeconds by functions.',
                'default' => [],
                'example' => [],
                'array' => true
            ])
            ->addRule('functionsStorageBreakdown', [
                'type' => Response::MODEL_METRIC_BREAKDOWN,
                'description' => 'Aggregated breakdown in totals of functions storage size (in bytes).',
                'default' => [],
                'example' => [],
                'array' => true
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'UsageProject';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_USAGE_PROJECT;
    }
}
