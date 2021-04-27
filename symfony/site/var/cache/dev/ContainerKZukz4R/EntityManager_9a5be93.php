<?php

namespace ContainerKZukz4R;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0955a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf05ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties76c3a = [
        
    ];

    public function getConnection()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getConnection', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getMetadataFactory', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getExpressionBuilder', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'beginTransaction', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getCache', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'transactional', array('func' => $func), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->transactional($func);
    }

    public function commit()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'commit', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->commit();
    }

    public function rollback()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'rollback', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getClassMetadata', array('className' => $className), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'createQuery', array('dql' => $dql), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'createNamedQuery', array('name' => $name), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'createQueryBuilder', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'flush', array('entity' => $entity), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'clear', array('entityName' => $entityName), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->clear($entityName);
    }

    public function close()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'close', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->close();
    }

    public function persist($entity)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'persist', array('entity' => $entity), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'remove', array('entity' => $entity), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'refresh', array('entity' => $entity), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'detach', array('entity' => $entity), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'merge', array('entity' => $entity), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'contains', array('entity' => $entity), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getEventManager', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getConfiguration', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'isOpen', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getUnitOfWork', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getProxyFactory', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'initializeObject', array('obj' => $obj), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'getFilters', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'isFiltersStateClean', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'hasFilters', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return $this->valueHolder0955a->hasFilters();
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

        $instance->initializerf05ff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0955a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0955a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0955a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, '__get', ['name' => $name], $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        if (isset(self::$publicProperties76c3a[$name])) {
            return $this->valueHolder0955a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0955a;

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

        $targetObject = $this->valueHolder0955a;
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
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0955a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0955a;
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
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, '__isset', array('name' => $name), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0955a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0955a;
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
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, '__unset', array('name' => $name), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0955a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0955a;
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
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, '__clone', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        $this->valueHolder0955a = clone $this->valueHolder0955a;
    }

    public function __sleep()
    {
        $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, '__sleep', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;

        return array('valueHolder0955a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf05ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf05ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf05ff && ($this->initializerf05ff->__invoke($valueHolder0955a, $this, 'initializeProxy', array(), $this->initializerf05ff) || 1) && $this->valueHolder0955a = $valueHolder0955a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0955a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0955a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
