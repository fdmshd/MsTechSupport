<?php

namespace Container84lbpzc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder64cc6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere07fd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties208e6 = [
        
    ];

    public function getConnection()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getConnection', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getMetadataFactory', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getExpressionBuilder', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'beginTransaction', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getCache', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getCache();
    }

    public function transactional($func)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'transactional', array('func' => $func), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->transactional($func);
    }

    public function commit()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'commit', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->commit();
    }

    public function rollback()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'rollback', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getClassMetadata', array('className' => $className), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'createQuery', array('dql' => $dql), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'createNamedQuery', array('name' => $name), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'createQueryBuilder', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'flush', array('entity' => $entity), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'clear', array('entityName' => $entityName), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->clear($entityName);
    }

    public function close()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'close', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->close();
    }

    public function persist($entity)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'persist', array('entity' => $entity), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'remove', array('entity' => $entity), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'refresh', array('entity' => $entity), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'detach', array('entity' => $entity), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'merge', array('entity' => $entity), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getRepository', array('entityName' => $entityName), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'contains', array('entity' => $entity), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getEventManager', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getConfiguration', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'isOpen', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getUnitOfWork', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getProxyFactory', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'initializeObject', array('obj' => $obj), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'getFilters', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'isFiltersStateClean', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'hasFilters', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return $this->valueHolder64cc6->hasFilters();
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

        $instance->initializere07fd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder64cc6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder64cc6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder64cc6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, '__get', ['name' => $name], $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        if (isset(self::$publicProperties208e6[$name])) {
            return $this->valueHolder64cc6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64cc6;

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

        $targetObject = $this->valueHolder64cc6;
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
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64cc6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder64cc6;
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
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, '__isset', array('name' => $name), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64cc6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder64cc6;
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
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, '__unset', array('name' => $name), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder64cc6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder64cc6;
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
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, '__clone', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        $this->valueHolder64cc6 = clone $this->valueHolder64cc6;
    }

    public function __sleep()
    {
        $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, '__sleep', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;

        return array('valueHolder64cc6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere07fd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere07fd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere07fd && ($this->initializere07fd->__invoke($valueHolder64cc6, $this, 'initializeProxy', array(), $this->initializere07fd) || 1) && $this->valueHolder64cc6 = $valueHolder64cc6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder64cc6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder64cc6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
