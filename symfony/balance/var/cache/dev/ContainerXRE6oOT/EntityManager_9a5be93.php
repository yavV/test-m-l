<?php

namespace ContainerXRE6oOT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder66047 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1c0ef = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf8a5a = [
        
    ];

    public function getConnection()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getConnection', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getMetadataFactory', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getExpressionBuilder', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'beginTransaction', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getCache', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'transactional', array('func' => $func), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->transactional($func);
    }

    public function commit()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'commit', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->commit();
    }

    public function rollback()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'rollback', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getClassMetadata', array('className' => $className), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'createQuery', array('dql' => $dql), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'createNamedQuery', array('name' => $name), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'createQueryBuilder', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'flush', array('entity' => $entity), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'clear', array('entityName' => $entityName), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->clear($entityName);
    }

    public function close()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'close', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->close();
    }

    public function persist($entity)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'persist', array('entity' => $entity), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'remove', array('entity' => $entity), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'refresh', array('entity' => $entity), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'detach', array('entity' => $entity), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'merge', array('entity' => $entity), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'contains', array('entity' => $entity), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getEventManager', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getConfiguration', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'isOpen', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getUnitOfWork', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getProxyFactory', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'initializeObject', array('obj' => $obj), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'getFilters', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'isFiltersStateClean', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'hasFilters', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return $this->valueHolder66047->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1c0ef = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder66047) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder66047 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder66047->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, '__get', ['name' => $name], $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        if (isset(self::$publicPropertiesf8a5a[$name])) {
            return $this->valueHolder66047->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66047;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66047;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66047;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66047;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, '__isset', array('name' => $name), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66047;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder66047;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, '__unset', array('name' => $name), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66047;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder66047;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, '__clone', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        $this->valueHolder66047 = clone $this->valueHolder66047;
    }

    public function __sleep()
    {
        $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, '__sleep', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;

        return array('valueHolder66047');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1c0ef = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1c0ef;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1c0ef && ($this->initializer1c0ef->__invoke($valueHolder66047, $this, 'initializeProxy', array(), $this->initializer1c0ef) || 1) && $this->valueHolder66047 = $valueHolder66047;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder66047;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder66047;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
