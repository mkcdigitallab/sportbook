# SportBook
## Phase 1 Squelette PHP & dépendances Composer
* Structure du projet 
```

├── composer.json
├── composer.lock
├── config
├── database
│   └── migrations
├── docker
├── public
├── README.md
├── routes
├── src
│   ├── Controller
│   ├── DTO
│   ├── Model
│   ├── Repository
│   ├── Service
│   └── Validation
├── storage
│   └── logs
├── templates
├── tests
└── vendor
    ├── autoload.php
    ├── bin
    │   └── carbon
    ├── brick
    │   └── math
    │       ├── CHANGELOG.md
    │       ├── composer.json
    │       ├── LICENSE
    │       ├── README.md
    │       └── src
    │           ├── BigDecimal.php
    │           ├── BigInteger.php
    │           ├── BigNumber.php
    │           ├── BigRational.php
    │           ├── Exception
    │           │   ├── DivisionByZeroException.php
    │           │   ├── IntegerOverflowException.php
    │           │   ├── InvalidArgumentException.php
    │           │   ├── MathException.php
    │           │   ├── NegativeNumberException.php
    │           │   ├── NoInverseException.php
    │           │   ├── NumberFormatException.php
    │           │   ├── PlatformException.php
    │           │   ├── RandomSourceException.php
    │           │   ├── RoundingNecessaryException.php
    │           │   └── UnsupportedPlatformException.php
    │           ├── Internal
    │           │   ├── Calculator
    │           │   │   ├── BcMathCalculator.php
    │           │   │   ├── GmpCalculator.php
    │           │   │   └── NativeCalculator.php
    │           │   ├── Calculator.php
    │           │   ├── CalculatorRegistry.php
    │           │   ├── DecimalHelper.php
    │           │   └── Safe.php
    │           └── RoundingMode.php
    ├── carbonphp
    │   └── carbon-doctrine-types
    │       ├── composer.json
    │       ├── LICENSE
    │       ├── README.md
    │       └── src
    │           └── Carbon
    │               └── Doctrine
    │                   ├── CarbonDoctrineType.php
    │                   ├── CarbonImmutableType.php
    │                   ├── CarbonTypeConverter.php
    │                   ├── CarbonType.php
    │                   ├── DateTimeDefaultPrecision.php
    │                   ├── DateTimeImmutableType.php
    │                   └── DateTimeType.php
    ├── composer
    │   ├── autoload_classmap.php
    │   ├── autoload_files.php
    │   ├── autoload_namespaces.php
    │   ├── autoload_psr4.php
    │   ├── autoload_real.php
    │   ├── autoload_static.php
    │   ├── ClassLoader.php
    │   ├── installed.json
    │   ├── installed.php
    │   ├── InstalledVersions.php
    │   ├── LICENSE
    │   └── platform_check.php
    ├── doctrine
    │   └── inflector
    │       ├── composer.json
    │       ├── docs
    │       │   └── en
    │       │       └── index.rst
    │       ├── LICENSE
    │       ├── README.md
    │       └── src
    │           ├── CachedWordInflector.php
    │           ├── GenericLanguageInflectorFactory.php
    │           ├── InflectorFactory.php
    │           ├── Inflector.php
    │           ├── LanguageInflectorFactory.php
    │           ├── Language.php
    │           ├── NoopWordInflector.php
    │           ├── Rules
    │           │   ├── English
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   ├── Esperanto
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   ├── French
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   ├── Italian
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   ├── NorwegianBokmal
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   ├── Pattern.php
    │           │   ├── Patterns.php
    │           │   ├── Portuguese
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   ├── Ruleset.php
    │           │   ├── Spanish
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   ├── Substitution.php
    │           │   ├── Substitutions.php
    │           │   ├── Transformation.php
    │           │   ├── Transformations.php
    │           │   ├── Turkish
    │           │   │   ├── Inflectible.php
    │           │   │   ├── InflectorFactory.php
    │           │   │   ├── Rules.php
    │           │   │   └── Uninflected.php
    │           │   └── Word.php
    │           ├── RulesetInflector.php
    │           └── WordInflector.php
    ├── graham-campbell
    │   └── result-type
    │       ├── composer.json
    │       ├── LICENSE
    │       └── src
    │           ├── Error.php
    │           ├── Result.php
    │           └── Success.php
    ├── illuminate
    │   ├── collections
    │   │   ├── Arr.php
    │   │   ├── Collection.php
    │   │   ├── composer.json
    │   │   ├── Enumerable.php
    │   │   ├── functions.php
    │   │   ├── helpers.php
    │   │   ├── HigherOrderCollectionProxy.php
    │   │   ├── ItemNotFoundException.php
    │   │   ├── LazyCollection.php
    │   │   ├── LICENSE.md
    │   │   ├── MultipleItemsFoundException.php
    │   │   └── Traits
    │   │       ├── EnumeratesValues.php
    │   │       └── TransformsToResourceCollection.php
    │   ├── conditionable
    │   │   ├── composer.json
    │   │   ├── HigherOrderWhenProxy.php
    │   │   ├── LICENSE.md
    │   │   └── Traits
    │   │       └── Conditionable.php
    │   ├── container
    │   │   ├── Attributes
    │   │   │   ├── Authenticated.php
    │   │   │   ├── Auth.php
    │   │   │   ├── Bind.php
    │   │   │   ├── BindWhen.php
    │   │   │   ├── Cache.php
    │   │   │   ├── Config.php
    │   │   │   ├── Context.php
    │   │   │   ├── CurrentUser.php
    │   │   │   ├── Database.php
    │   │   │   ├── DB.php
    │   │   │   ├── Give.php
    │   │   │   ├── Log.php
    │   │   │   ├── RequestAttribute.php
    │   │   │   ├── RouteParameter.php
    │   │   │   ├── Scoped.php
    │   │   │   ├── Singleton.php
    │   │   │   ├── Storage.php
    │   │   │   └── Tag.php
    │   │   ├── BoundMethod.php
    │   │   ├── composer.json
    │   │   ├── Container.php
    │   │   ├── ContextualBindingBuilder.php
    │   │   ├── EntryNotFoundException.php
    │   │   ├── LICENSE.md
    │   │   ├── RewindableGenerator.php
    │   │   └── Util.php
    │   ├── contracts
    │   │   ├── Auth
    │   │   │   ├── Access
    │   │   │   │   ├── Authorizable.php
    │   │   │   │   └── Gate.php
    │   │   │   ├── Authenticatable.php
    │   │   │   ├── CanResetPassword.php
    │   │   │   ├── Factory.php
    │   │   │   ├── Guard.php
    │   │   │   ├── Middleware
    │   │   │   │   └── AuthenticatesRequests.php
    │   │   │   ├── MustVerifyEmail.php
    │   │   │   ├── PasswordBrokerFactory.php
    │   │   │   ├── PasswordBroker.php
    │   │   │   ├── StatefulGuard.php
    │   │   │   ├── SupportsBasicAuth.php
    │   │   │   └── UserProvider.php
    │   │   ├── Broadcasting
    │   │   │   ├── Broadcaster.php
    │   │   │   ├── Factory.php
    │   │   │   ├── HasBroadcastChannel.php
    │   │   │   ├── ShouldBeUnique.php
    │   │   │   ├── ShouldBroadcastNow.php
    │   │   │   ├── ShouldBroadcast.php
    │   │   │   └── ShouldRescue.php
    │   │   ├── Bus
    │   │   │   ├── Dispatcher.php
    │   │   │   └── QueueingDispatcher.php
    │   │   ├── Cache
    │   │   │   ├── CanFlushLocks.php
    │   │   │   ├── Factory.php
    │   │   │   ├── Lock.php
    │   │   │   ├── LockProvider.php
    │   │   │   ├── LockTimeoutException.php
    │   │   │   ├── Repository.php
    │   │   │   └── Store.php
    │   │   ├── composer.json
    │   │   ├── Concurrency
    │   │   │   └── Driver.php
    │   │   ├── Config
    │   │   │   └── Repository.php
    │   │   ├── Console
    │   │   │   ├── Application.php
    │   │   │   ├── Isolatable.php
    │   │   │   ├── Kernel.php
    │   │   │   └── PromptsForMissingInput.php
    │   │   ├── Container
    │   │   │   ├── BindingResolutionException.php
    │   │   │   ├── CircularDependencyException.php
    │   │   │   ├── Container.php
    │   │   │   ├── ContextualAttribute.php
    │   │   │   ├── ContextualBindingBuilder.php
    │   │   │   └── SelfBuilding.php
    │   │   ├── Cookie
    │   │   │   ├── Factory.php
    │   │   │   └── QueueingFactory.php
    │   │   ├── Database
    │   │   │   ├── ConcurrencyErrorDetector.php
    │   │   │   ├── Eloquent
    │   │   │   │   ├── Builder.php
    │   │   │   │   ├── Castable.php
    │   │   │   │   ├── CastsAttributes.php
    │   │   │   │   ├── CastsInboundAttributes.php
    │   │   │   │   ├── ComparesCastableAttributes.php
    │   │   │   │   ├── DeviatesCastableAttributes.php
    │   │   │   │   ├── SerializesCastableAttributes.php
    │   │   │   │   └── SupportsPartialRelations.php
    │   │   │   ├── Events
    │   │   │   │   └── MigrationEvent.php
    │   │   │   ├── LostConnectionDetector.php
    │   │   │   ├── ModelIdentifier.php
    │   │   │   └── Query
    │   │   │       ├── Builder.php
    │   │   │       ├── ConditionExpression.php
    │   │   │       └── Expression.php
    │   │   ├── Debug
    │   │   │   ├── ExceptionHandler.php
    │   │   │   └── ShouldntReport.php
    │   │   ├── Encryption
    │   │   │   ├── DecryptException.php
    │   │   │   ├── Encrypter.php
    │   │   │   ├── EncryptException.php
    │   │   │   └── StringEncrypter.php
    │   │   ├── Events
    │   │   │   ├── Dispatcher.php
    │   │   │   ├── ShouldBeDiscovered.php
    │   │   │   ├── ShouldDispatchAfterCommit.php
    │   │   │   └── ShouldHandleEventsAfterCommit.php
    │   │   ├── Filesystem
    │   │   │   ├── Cloud.php
    │   │   │   ├── Factory.php
    │   │   │   ├── FileNotFoundException.php
    │   │   │   ├── Filesystem.php
    │   │   │   └── LockTimeoutException.php
    │   │   ├── Foundation
    │   │   │   ├── Application.php
    │   │   │   ├── CachesConfiguration.php
    │   │   │   ├── CachesRoutes.php
    │   │   │   ├── ExceptionRenderer.php
    │   │   │   └── MaintenanceMode.php
    │   │   ├── Hashing
    │   │   │   └── Hasher.php
    │   │   ├── Http
    │   │   │   └── Kernel.php
    │   │   ├── Image
    │   │   │   ├── Driver.php
    │   │   │   └── Transformation.php
    │   │   ├── JsonSchema
    │   │   │   └── JsonSchema.php
    │   │   ├── LICENSE.md
    │   │   ├── Log
    │   │   │   └── ContextLogProcessor.php
    │   │   ├── Mail
    │   │   │   ├── Attachable.php
    │   │   │   ├── Factory.php
    │   │   │   ├── Mailable.php
    │   │   │   ├── Mailer.php
    │   │   │   └── MailQueue.php
    │   │   ├── Notifications
    │   │   │   ├── Dispatcher.php
    │   │   │   └── Factory.php
    │   │   ├── Pagination
    │   │   │   ├── CursorPaginator.php
    │   │   │   ├── LengthAwarePaginator.php
    │   │   │   └── Paginator.php
    │   │   ├── Pipeline
    │   │   │   ├── Hub.php
    │   │   │   └── Pipeline.php
    │   │   ├── Process
    │   │   │   ├── InvokedProcess.php
    │   │   │   └── ProcessResult.php
    │   │   ├── Queue
    │   │   │   ├── ClearableQueue.php
    │   │   │   ├── EntityNotFoundException.php
    │   │   │   ├── EntityResolver.php
    │   │   │   ├── Factory.php
    │   │   │   ├── Interruptible.php
    │   │   │   ├── Job.php
    │   │   │   ├── Monitor.php
    │   │   │   ├── PreparesForDispatch.php
    │   │   │   ├── QueueableCollection.php
    │   │   │   ├── QueueableEntity.php
    │   │   │   ├── Queue.php
    │   │   │   ├── ShouldBeEncrypted.php
    │   │   │   ├── ShouldBeUnique.php
    │   │   │   ├── ShouldBeUniqueUntilProcessing.php
    │   │   │   ├── ShouldQueueAfterCommit.php
    │   │   │   └── ShouldQueue.php
    │   │   ├── Redis
    │   │   │   ├── Connection.php
    │   │   │   ├── Connector.php
    │   │   │   ├── Factory.php
    │   │   │   └── LimiterTimeoutException.php
    │   │   ├── Routing
    │   │   │   ├── BindingRegistrar.php
    │   │   │   ├── Registrar.php
    │   │   │   ├── ResponseFactory.php
    │   │   │   ├── UrlGenerator.php
    │   │   │   └── UrlRoutable.php
    │   │   ├── Session
    │   │   │   ├── Middleware
    │   │   │   │   └── AuthenticatesSessions.php
    │   │   │   └── Session.php
    │   │   ├── Support
    │   │   │   ├── Arrayable.php
    │   │   │   ├── CanBeEscapedWhenCastToString.php
    │   │   │   ├── DeferrableProvider.php
    │   │   │   ├── DeferringDisplayableValue.php
    │   │   │   ├── HasOnceHash.php
    │   │   │   ├── Htmlable.php
    │   │   │   ├── Jsonable.php
    │   │   │   ├── MessageBag.php
    │   │   │   ├── MessageProvider.php
    │   │   │   ├── Renderable.php
    │   │   │   ├── Responsable.php
    │   │   │   └── ValidatedData.php
    │   │   ├── Translation
    │   │   │   ├── HasLocalePreference.php
    │   │   │   ├── Loader.php
    │   │   │   └── Translator.php
    │   │   ├── Validation
    │   │   │   ├── CompilableRules.php
    │   │   │   ├── DataAwareRule.php
    │   │   │   ├── Factory.php
    │   │   │   ├── ImplicitRule.php
    │   │   │   ├── InvokableRule.php
    │   │   │   ├── Rule.php
    │   │   │   ├── UncompromisedVerifier.php
    │   │   │   ├── ValidatesWhenResolved.php
    │   │   │   ├── ValidationRule.php
    │   │   │   ├── ValidatorAwareRule.php
    │   │   │   └── Validator.php
    │   │   └── View
    │   │       ├── Engine.php
    │   │       ├── Factory.php
    │   │       ├── ViewCompilationException.php
    │   │       └── View.php
    │   ├── database
    │   │   ├── Capsule
    │   │   │   └── Manager.php
    │   │   ├── ClassMorphViolationException.php
    │   │   ├── composer.json
    │   │   ├── Concerns
    │   │   │   ├── BuildsQueries.php
    │   │   │   ├── BuildsWhereDateClauses.php
    │   │   │   ├── CompilesJsonPaths.php
    │   │   │   ├── ExplainsQueries.php
    │   │   │   ├── ManagesTransactions.php
    │   │   │   └── ParsesSearchPath.php
    │   │   ├── ConcurrencyErrorDetector.php
    │   │   ├── ConfigurationUrlParser.php
    │   │   ├── ConnectionInterface.php
    │   │   ├── Connection.php
    │   │   ├── ConnectionResolverInterface.php
    │   │   ├── ConnectionResolver.php
    │   │   ├── Connectors
    │   │   │   ├── Concerns
    │   │   │   │   └── ConfiguresPooledConnections.php
    │   │   │   ├── ConnectionFactory.php
    │   │   │   ├── ConnectorInterface.php
    │   │   │   ├── Connector.php
    │   │   │   ├── MariaDbConnector.php
    │   │   │   ├── MySqlConnector.php
    │   │   │   ├── PostgresConnector.php
    │   │   │   ├── SQLiteConnector.php
    │   │   │   └── SqlServerConnector.php
    │   │   ├── Console
    │   │   │   ├── Concerns
    │   │   │   │   └── InteractsWithPooledConnections.php
    │   │   │   ├── DatabaseInspectionCommand.php
    │   │   │   ├── DbCommand.php
    │   │   │   ├── DumpCommand.php
    │   │   │   ├── Factories
    │   │   │   │   ├── FactoryMakeCommand.php
    │   │   │   │   └── stubs
    │   │   │   │       └── factory.stub
    │   │   │   ├── Migrations
    │   │   │   │   ├── BaseCommand.php
    │   │   │   │   ├── FreshCommand.php
    │   │   │   │   ├── InstallCommand.php
    │   │   │   │   ├── MigrateCommand.php
    │   │   │   │   ├── MigrateMakeCommand.php
    │   │   │   │   ├── RefreshCommand.php
    │   │   │   │   ├── ResetCommand.php
    │   │   │   │   ├── RollbackCommand.php
    │   │   │   │   ├── StatusCommand.php
    │   │   │   │   └── TableGuesser.php
    │   │   │   ├── MonitorCommand.php
    │   │   │   ├── PruneCommand.php
    │   │   │   ├── Seeds
    │   │   │   │   ├── SeedCommand.php
    │   │   │   │   ├── SeederMakeCommand.php
    │   │   │   │   ├── stubs
    │   │   │   │   │   └── seeder.stub
    │   │   │   │   └── WithoutModelEvents.php
    │   │   │   ├── ShowCommand.php
    │   │   │   ├── ShowModelCommand.php
    │   │   │   ├── TableCommand.php
    │   │   │   └── WipeCommand.php
    │   │   ├── DatabaseManager.php
    │   │   ├── DatabaseServiceProvider.php
    │   │   ├── DatabaseTransactionRecord.php
    │   │   ├── DatabaseTransactionsManager.php
    │   │   ├── DeadlockException.php
    │   │   ├── DetectsConcurrencyErrors.php
    │   │   ├── DetectsLostConnections.php
    │   │   ├── Eloquent
    │   │   │   ├── Attributes
    │   │   │   │   ├── Appends.php
    │   │   │   │   ├── Boot.php
    │   │   │   │   ├── CollectedBy.php
    │   │   │   │   ├── Connection.php
    │   │   │   │   ├── DateFormat.php
    │   │   │   │   ├── Fillable.php
    │   │   │   │   ├── Guarded.php
    │   │   │   │   ├── Hidden.php
    │   │   │   │   ├── Initialize.php
    │   │   │   │   ├── ObservedBy.php
    │   │   │   │   ├── RouteKey.php
    │   │   │   │   ├── ScopedBy.php
    │   │   │   │   ├── Scope.php
    │   │   │   │   ├── Table.php
    │   │   │   │   ├── Touches.php
    │   │   │   │   ├── Unguarded.php
    │   │   │   │   ├── UseEloquentBuilder.php
    │   │   │   │   ├── UseFactory.php
    │   │   │   │   ├── UsePolicy.php
    │   │   │   │   ├── UseResourceCollection.php
    │   │   │   │   ├── UseResource.php
    │   │   │   │   ├── Visible.php
    │   │   │   │   ├── WithoutIncrementing.php
    │   │   │   │   └── WithoutTimestamps.php
    │   │   │   ├── BroadcastableModelEventOccurred.php
    │   │   │   ├── BroadcastsEventsAfterCommit.php
    │   │   │   ├── BroadcastsEvents.php
    │   │   │   ├── Builder.php
    │   │   │   ├── Casts
    │   │   │   │   ├── ArrayObject.php
    │   │   │   │   ├── AsArrayObject.php
    │   │   │   │   ├── AsBinary.php
    │   │   │   │   ├── AsCollection.php
    │   │   │   │   ├── AsEncryptedArrayObject.php
    │   │   │   │   ├── AsEncryptedCollection.php
    │   │   │   │   ├── AsEnumArrayObject.php
    │   │   │   │   ├── AsEnumCollection.php
    │   │   │   │   ├── AsFluent.php
    │   │   │   │   ├── AsHtmlString.php
    │   │   │   │   ├── AsStringable.php
    │   │   │   │   ├── AsUri.php
    │   │   │   │   ├── AsVector.php
    │   │   │   │   ├── Attribute.php
    │   │   │   │   └── Json.php
    │   │   │   ├── Collection.php
    │   │   │   ├── Concerns
    │   │   │   │   ├── GuardsAttributes.php
    │   │   │   │   ├── HasAttributes.php
    │   │   │   │   ├── HasEvents.php
    │   │   │   │   ├── HasGlobalScopes.php
    │   │   │   │   ├── HasRelationships.php
    │   │   │   │   ├── HasTimestamps.php
    │   │   │   │   ├── HasUlids.php
    │   │   │   │   ├── HasUniqueIds.php
    │   │   │   │   ├── HasUniqueStringIds.php
    │   │   │   │   ├── HasUuids.php
    │   │   │   │   ├── HasVersion4Uuids.php
    │   │   │   │   ├── HidesAttributes.php
    │   │   │   │   ├── PreventsCircularRecursion.php
    │   │   │   │   ├── QueriesRelationships.php
    │   │   │   │   └── TransformsToResource.php
    │   │   │   ├── Factories
    │   │   │   │   ├── Attributes
    │   │   │   │   │   └── UseModel.php
    │   │   │   │   ├── BelongsToManyRelationship.php
    │   │   │   │   ├── BelongsToRelationship.php
    │   │   │   │   ├── CrossJoinSequence.php
    │   │   │   │   ├── Factory.php
    │   │   │   │   ├── HasFactory.php
    │   │   │   │   ├── Relationship.php
    │   │   │   │   └── Sequence.php
    │   │   │   ├── HasBuilder.php
    │   │   │   ├── HasCollection.php
    │   │   │   ├── HigherOrderBuilderProxy.php
    │   │   │   ├── InvalidCastException.php
    │   │   │   ├── JsonEncodingException.php
    │   │   │   ├── MassAssignmentException.php
    │   │   │   ├── MassPrunable.php
    │   │   │   ├── MissingAttributeException.php
    │   │   │   ├── ModelInfo.php
    │   │   │   ├── ModelInspector.php
    │   │   │   ├── ModelNotFoundException.php
    │   │   │   ├── Model.php
    │   │   │   ├── PendingHasThroughRelationship.php
    │   │   │   ├── Prunable.php
    │   │   │   ├── QueueEntityResolver.php
    │   │   │   ├── RelationNotFoundException.php
    │   │   │   ├── Relations
    │   │   │   │   ├── BelongsToMany.php
    │   │   │   │   ├── BelongsTo.php
    │   │   │   │   ├── Concerns
    │   │   │   │   │   ├── AsPivot.php
    │   │   │   │   │   ├── CanBeOneOfMany.php
    │   │   │   │   │   ├── ComparesRelatedModels.php
    │   │   │   │   │   ├── InteractsWithDictionary.php
    │   │   │   │   │   ├── InteractsWithPivotTable.php
    │   │   │   │   │   ├── SupportsDefaultModels.php
    │   │   │   │   │   └── SupportsInverseRelations.php
    │   │   │   │   ├── HasMany.php
    │   │   │   │   ├── HasManyThrough.php
    │   │   │   │   ├── HasOneOrMany.php
    │   │   │   │   ├── HasOneOrManyThrough.php
    │   │   │   │   ├── HasOne.php
    │   │   │   │   ├── HasOneThrough.php
    │   │   │   │   ├── MorphMany.php
    │   │   │   │   ├── MorphOneOrMany.php
    │   │   │   │   ├── MorphOne.php
    │   │   │   │   ├── MorphPivot.php
    │   │   │   │   ├── MorphToMany.php
    │   │   │   │   ├── MorphTo.php
    │   │   │   │   ├── Pivot.php
    │   │   │   │   └── Relation.php
    │   │   │   ├── Scope.php
    │   │   │   ├── SoftDeletes.php
    │   │   │   └── SoftDeletingScope.php
    │   │   ├── Events
    │   │   │   ├── ConnectionEstablished.php
    │   │   │   ├── ConnectionEvent.php
    │   │   │   ├── DatabaseBusy.php
    │   │   │   ├── DatabaseRefreshed.php
    │   │   │   ├── MigrationEnded.php
    │   │   │   ├── MigrationEvent.php
    │   │   │   ├── MigrationsEnded.php
    │   │   │   ├── MigrationsEvent.php
    │   │   │   ├── MigrationSkipped.php
    │   │   │   ├── MigrationsPruned.php
    │   │   │   ├── MigrationsStarted.php
    │   │   │   ├── MigrationStarted.php
    │   │   │   ├── ModelPruningFinished.php
    │   │   │   ├── ModelPruningStarting.php
    │   │   │   ├── ModelsPruned.php
    │   │   │   ├── NoPendingMigrations.php
    │   │   │   ├── QueryExecuted.php
    │   │   │   ├── SchemaDumped.php
    │   │   │   ├── SchemaLoaded.php
    │   │   │   ├── StatementPrepared.php
    │   │   │   ├── TransactionBeginning.php
    │   │   │   ├── TransactionCommitted.php
    │   │   │   ├── TransactionCommitting.php
    │   │   │   └── TransactionRolledBack.php
    │   │   ├── Grammar.php
    │   │   ├── LazyLoadingViolationException.php
    │   │   ├── LICENSE.md
    │   │   ├── LostConnectionDetector.php
    │   │   ├── LostConnectionException.php
    │   │   ├── MariaDbConnection.php
    │   │   ├── Migrations
    │   │   │   ├── DatabaseMigrationRepository.php
    │   │   │   ├── MigrationCreator.php
    │   │   │   ├── Migration.php
    │   │   │   ├── MigrationRepositoryInterface.php
    │   │   │   ├── MigrationResult.php
    │   │   │   ├── Migrator.php
    │   │   │   └── stubs
    │   │   │       ├── migration.create.stub
    │   │   │       ├── migration.stub
    │   │   │       └── migration.update.stub
    │   │   ├── MigrationServiceProvider.php
    │   │   ├── MultipleColumnsSelectedException.php
    │   │   ├── MultipleRecordsFoundException.php
    │   │   ├── MySqlConnection.php
    │   │   ├── PostgresConnection.php
    │   │   ├── Query
    │   │   │   ├── Builder.php
    │   │   │   ├── Expression.php
    │   │   │   ├── Grammars
    │   │   │   │   ├── Grammar.php
    │   │   │   │   ├── MariaDbGrammar.php
    │   │   │   │   ├── MySqlGrammar.php
    │   │   │   │   ├── PostgresGrammar.php
    │   │   │   │   ├── SQLiteGrammar.php
    │   │   │   │   └── SqlServerGrammar.php
    │   │   │   ├── IndexHint.php
    │   │   │   ├── JoinClause.php
    │   │   │   ├── JoinLateralClause.php
    │   │   │   └── Processors
    │   │   │       ├── MariaDbProcessor.php
    │   │   │       ├── MySqlProcessor.php
    │   │   │       ├── PostgresProcessor.php
    │   │   │       ├── Processor.php
    │   │   │       ├── SQLiteProcessor.php
    │   │   │       └── SqlServerProcessor.php
    │   │   ├── QueryException.php
    │   │   ├── README.md
    │   │   ├── RecordNotFoundException.php
    │   │   ├── RecordsNotFoundException.php
    │   │   ├── Schema
    │   │   │   ├── Blueprint.php
    │   │   │   ├── BlueprintState.php
    │   │   │   ├── Builder.php
    │   │   │   ├── ColumnDefinition.php
    │   │   │   ├── ForeignIdColumnDefinition.php
    │   │   │   ├── ForeignKeyDefinition.php
    │   │   │   ├── Grammars
    │   │   │   │   ├── Grammar.php
    │   │   │   │   ├── MariaDbGrammar.php
    │   │   │   │   ├── MySqlGrammar.php
    │   │   │   │   ├── PostgresGrammar.php
    │   │   │   │   ├── SQLiteGrammar.php
    │   │   │   │   └── SqlServerGrammar.php
    │   │   │   ├── IndexDefinition.php
    │   │   │   ├── MariaDbBuilder.php
    │   │   │   ├── MariaDbSchemaState.php
    │   │   │   ├── MySqlBuilder.php
    │   │   │   ├── MySqlSchemaState.php
    │   │   │   ├── PostgresBuilder.php
    │   │   │   ├── PostgresSchemaState.php
    │   │   │   ├── SchemaState.php
    │   │   │   ├── SQLiteBuilder.php
    │   │   │   ├── SqliteSchemaState.php
    │   │   │   └── SqlServerBuilder.php
    │   │   ├── Seeder.php
    │   │   ├── SQLiteConnection.php
    │   │   ├── SQLiteDatabaseDoesNotExistException.php
    │   │   ├── SqlServerConnection.php
    │   │   └── UniqueConstraintViolationException.php
    │   ├── macroable
    │   │   ├── composer.json
    │   │   ├── LICENSE.md
    │   │   └── Traits
    │   │       └── Macroable.php
    │   ├── reflection
    │   │   ├── composer.json
    │   │   ├── helpers.php
    │   │   ├── LICENSE.md
    │   │   ├── Reflector.php
    │   │   └── Traits
    │   │       └── ReflectsClosures.php
    │   └── support
    │       ├── AggregateServiceProvider.php
    │       ├── Benchmark.php
    │       ├── BinaryCodec.php
    │       ├── Carbon.php
    │       ├── composer.json
    │       ├── Composer.php
    │       ├── ConfigurationUrlParser.php
    │       ├── Contracts
    │       │   └── NodePackageManager.php
    │       ├── DateFactory.php
    │       ├── DefaultProviders.php
    │       ├── Defer
    │       │   ├── DeferredCallbackCollection.php
    │       │   └── DeferredCallback.php
    │       ├── EncodedHtmlString.php
    │       ├── Env.php
    │       ├── Exceptions
    │       │   └── MathException.php
    │       ├── Facades
    │       │   ├── App.php
    │       │   ├── Artisan.php
    │       │   ├── Auth.php
    │       │   ├── Blade.php
    │       │   ├── Broadcast.php
    │       │   ├── Bus.php
    │       │   ├── Cache.php
    │       │   ├── Cloud.php
    │       │   ├── Concurrency.php
    │       │   ├── Config.php
    │       │   ├── Context.php
    │       │   ├── Cookie.php
    │       │   ├── Crypt.php
    │       │   ├── Date.php
    │       │   ├── DB.php
    │       │   ├── Event.php
    │       │   ├── Exceptions.php
    │       │   ├── Facade.php
    │       │   ├── File.php
    │       │   ├── Gate.php
    │       │   ├── Hash.php
    │       │   ├── Http.php
    │       │   ├── Image.php
    │       │   ├── Lang.php
    │       │   ├── Log.php
    │       │   ├── Mail.php
    │       │   ├── MaintenanceMode.php
    │       │   ├── Notification.php
    │       │   ├── ParallelTesting.php
    │       │   ├── Password.php
    │       │   ├── Pipeline.php
    │       │   ├── Process.php
    │       │   ├── Queue.php
    │       │   ├── RateLimiter.php
    │       │   ├── Redirect.php
    │       │   ├── Redis.php
    │       │   ├── Request.php
    │       │   ├── Response.php
    │       │   ├── Route.php
    │       │   ├── Schedule.php
    │       │   ├── Schema.php
    │       │   ├── Session.php
    │       │   ├── Storage.php
    │       │   ├── URL.php
    │       │   ├── Validator.php
    │       │   ├── View.php
    │       │   └── Vite.php
    │       ├── Fluent.php
    │       ├── functions.php
    │       ├── helpers.php
    │       ├── HigherOrderTapProxy.php
    │       ├── HtmlString.php
    │       ├── InteractsWithTime.php
    │       ├── Js.php
    │       ├── LICENSE.md
    │       ├── Lottery.php
    │       ├── Manager.php
    │       ├── MessageBag.php
    │       ├── MultipleInstanceManager.php
    │       ├── NamespacedItemResolver.php
    │       ├── NodePackageManager.php
    │       ├── NodePackageManagers
    │       │   ├── Bun.php
    │       │   ├── Npm.php
    │       │   ├── Pnpm.php
    │       │   └── Yarn.php
    │       ├── Number.php
    │       ├── Onceable.php
    │       ├── Once.php
    │       ├── Optional.php
    │       ├── Pluralizer.php
    │       ├── ProcessUtils.php
    │       ├── Queue
    │       │   └── Concerns
    │       │       └── ResolvesQueueRoutes.php
    │       ├── RebindsCallbacksToSelf.php
    │       ├── ServiceProvider.php
    │       ├── Sleep.php
    │       ├── Stringable.php
    │       ├── Str.php
    │       ├── Testing
    │       │   └── Fakes
    │       │       ├── BatchFake.php
    │       │       ├── BatchRepositoryFake.php
    │       │       ├── BusFake.php
    │       │       ├── ChainedBatchTruthTest.php
    │       │       ├── EventFake.php
    │       │       ├── ExceptionHandlerFake.php
    │       │       ├── Fake.php
    │       │       ├── MailFake.php
    │       │       ├── NotificationFake.php
    │       │       ├── PendingBatchFake.php
    │       │       ├── PendingChainFake.php
    │       │       ├── PendingMailFake.php
    │       │       └── QueueFake.php
    │       ├── Timebox.php
    │       ├── Traits
    │       │   ├── CapsuleManagerTrait.php
    │       │   ├── Dumpable.php
    │       │   ├── ForwardsCalls.php
    │       │   ├── InteractsWithData.php
    │       │   ├── Localizable.php
    │       │   ├── ParsesSqlServerConfigurationUrls.php
    │       │   ├── ReadsClassAttributes.php
    │       │   └── Tappable.php
    │       ├── Uri.php
    │       ├── UriQueryString.php
    │       ├── ValidatedInput.php
    │       └── ViewErrorBag.php
    ├── laravel
    │   └── serializable-closure
    │       ├── composer.json
    │       ├── LICENSE.md
    │       ├── README.md
    │       └── src
    │           ├── Contracts
    │           │   ├── Serializable.php
    │           │   └── Signer.php
    │           ├── Exceptions
    │           │   ├── InvalidSignatureException.php
    │           │   └── MissingSecretKeyException.php
    │           ├── SerializableClosure.php
    │           ├── Serializers
    │           │   ├── Native.php
    │           │   └── Signed.php
    │           ├── Signers
    │           │   └── Hmac.php
    │           ├── Support
    │           │   ├── ClosureScope.php
    │           │   ├── ClosureStream.php
    │           │   ├── ReflectionClosure.php
    │           │   └── SelfReference.php
    │           └── UnsignedSerializableClosure.php
    ├── nesbot
    │   └── carbon
    │       ├── bin
    │       │   ├── carbon
    │       │   └── carbon.bat
    │       ├── composer.json
    │       ├── extension.neon
    │       ├── lazy
    │       │   └── Carbon
    │       │       ├── MessageFormatter
    │       │       │   ├── MessageFormatterMapperStrongType.php
    │       │       │   └── MessageFormatterMapperWeakType.php
    │       │       ├── ProtectedDatePeriod.php
    │       │       ├── TranslatorStrongType.php
    │       │       ├── TranslatorWeakType.php
    │       │       └── UnprotectedDatePeriod.php
    │       ├── LICENSE
    │       ├── readme.md
    │       ├── SECURITY.md
    │       └── src
    │           └── Carbon
    │               ├── AbstractTranslator.php
    │               ├── Callback.php
    │               ├── CarbonConverterInterface.php
    │               ├── CarbonImmutable.php
    │               ├── CarbonInterface.php
    │               ├── CarbonInterval.php
    │               ├── CarbonPeriodImmutable.php
    │               ├── CarbonPeriod.php
    │               ├── Carbon.php
    │               ├── CarbonTimeZone.php
    │               ├── Cli
    │               │   └── Invoker.php
    │               ├── Constants
    │               │   ├── DiffOptions.php
    │               │   ├── Format.php
    │               │   ├── TranslationOptions.php
    │               │   └── UnitValue.php
    │               ├── Exceptions
    │               │   ├── BadComparisonUnitException.php
    │               │   ├── BadFluentConstructorException.php
    │               │   ├── BadFluentSetterException.php
    │               │   ├── BadMethodCallException.php
    │               │   ├── EndLessPeriodException.php
    │               │   ├── Exception.php
    │               │   ├── ImmutableException.php
    │               │   ├── InvalidArgumentException.php
    │               │   ├── InvalidCastException.php
    │               │   ├── InvalidDateException.php
    │               │   ├── InvalidFormatException.php
    │               │   ├── InvalidIntervalException.php
    │               │   ├── InvalidPeriodDateException.php
    │               │   ├── InvalidPeriodParameterException.php
    │               │   ├── InvalidTimeZoneException.php
    │               │   ├── InvalidTypeException.php
    │               │   ├── NotACarbonClassException.php
    │               │   ├── NotAPeriodException.php
    │               │   ├── NotLocaleAwareException.php
    │               │   ├── OutOfRangeException.php
    │               │   ├── ParseErrorException.php
    │               │   ├── RuntimeException.php
    │               │   ├── UnitException.php
    │               │   ├── UnitNotConfiguredException.php
    │               │   ├── UnknownGetterException.php
    │               │   ├── UnknownMethodException.php
    │               │   ├── UnknownSetterException.php
    │               │   ├── UnknownUnitException.php
    │               │   ├── UnreachableException.php
    │               │   └── UnsupportedUnitException.php
    │               ├── FactoryImmutable.php
    │               ├── Factory.php
    │               ├── Lang
    │               │   ├── aa_DJ.php
    │               │   ├── aa_ER.php
    │               │   ├── aa_ER@saaho.php
    │               │   ├── aa_ET.php
    │               │   ├── aa.php
    │               │   ├── af_NA.php
    │               │   ├── af.php
    │               │   ├── af_ZA.php
    │               │   ├── agq.php
    │               │   ├── agr_PE.php
    │               │   ├── agr.php
    │               │   ├── ak_GH.php
    │               │   ├── ak.php
    │               │   ├── am_ET.php
    │               │   ├── am.php
    │               │   ├── an_ES.php
    │               │   ├── an.php
    │               │   ├── anp_IN.php
    │               │   ├── anp.php
    │               │   ├── ar_AE.php
    │               │   ├── ar_BH.php
    │               │   ├── ar_DJ.php
    │               │   ├── ar_DZ.php
    │               │   ├── ar_EG.php
    │               │   ├── ar_EH.php
    │               │   ├── ar_ER.php
    │               │   ├── ar_IL.php
    │               │   ├── ar_IN.php
    │               │   ├── ar_IQ.php
    │               │   ├── ar_JO.php
    │               │   ├── ar_KM.php
    │               │   ├── ar_KW.php
    │               │   ├── ar_LB.php
    │               │   ├── ar_LY.php
    │               │   ├── ar_MA.php
    │               │   ├── ar_MR.php
    │               │   ├── ar_OM.php
    │               │   ├── ar.php
    │               │   ├── ar_PS.php
    │               │   ├── ar_QA.php
    │               │   ├── ar_SA.php
    │               │   ├── ar_SD.php
    │               │   ├── ar_Shakl.php
    │               │   ├── ar_SO.php
    │               │   ├── ar_SS.php
    │               │   ├── ar_SY.php
    │               │   ├── ar_TD.php
    │               │   ├── ar_TN.php
    │               │   ├── ar_YE.php
    │               │   ├── asa.php
    │               │   ├── as_IN.php
    │               │   ├── as.php
    │               │   ├── ast_ES.php
    │               │   ├── ast.php
    │               │   ├── ayc_PE.php
    │               │   ├── ayc.php
    │               │   ├── az_Arab.php
    │               │   ├── az_AZ.php
    │               │   ├── az_Cyrl.php
    │               │   ├── az_IR.php
    │               │   ├── az_Latn.php
    │               │   ├── az.php
    │               │   ├── bas.php
    │               │   ├── be_BY@latin.php
    │               │   ├── be_BY.php
    │               │   ├── bem.php
    │               │   ├── bem_ZM.php
    │               │   ├── be.php
    │               │   ├── ber_DZ.php
    │               │   ├── ber_MA.php
    │               │   ├── ber.php
    │               │   ├── bez.php
    │               │   ├── bg_BG.php
    │               │   ├── bg.php
    │               │   ├── bhb_IN.php
    │               │   ├── bhb.php
    │               │   ├── bho_IN.php
    │               │   ├── bho.php
    │               │   ├── bi.php
    │               │   ├── bi_VU.php
    │               │   ├── bm.php
    │               │   ├── bn_BD.php
    │               │   ├── bn_IN.php
    │               │   ├── bn.php
    │               │   ├── bo_CN.php
    │               │   ├── bo_IN.php
    │               │   ├── bo.php
    │               │   ├── br_FR.php
    │               │   ├── br.php
    │               │   ├── brx_IN.php
    │               │   ├── brx.php
    │               │   ├── bs_BA.php
    │               │   ├── bs_Cyrl.php
    │               │   ├── bs_Latn.php
    │               │   ├── bs.php
    │               │   ├── byn_ER.php
    │               │   ├── byn.php
    │               │   ├── ca_AD.php
    │               │   ├── ca_ES.php
    │               │   ├── ca_ES_Valencia.php
    │               │   ├── ca_FR.php
    │               │   ├── ca_IT.php
    │               │   ├── ca.php
    │               │   ├── ccp_IN.php
    │               │   ├── ccp.php
    │               │   ├── ce.php
    │               │   ├── ce_RU.php
    │               │   ├── cgg.php
    │               │   ├── chr.php
    │               │   ├── chr_US.php
    │               │   ├── ckb.php
    │               │   ├── cmn.php
    │               │   ├── cmn_TW.php
    │               │   ├── crh.php
    │               │   ├── crh_UA.php
    │               │   ├── csb.php
    │               │   ├── csb_PL.php
    │               │   ├── cs_CZ.php
    │               │   ├── cs.php
    │               │   ├── cu.php
    │               │   ├── cv.php
    │               │   ├── cv_RU.php
    │               │   ├── cy_GB.php
    │               │   ├── cy.php
    │               │   ├── da_DK.php
    │               │   ├── da_GL.php
    │               │   ├── da.php
    │               │   ├── dav.php
    │               │   ├── de_AT.php
    │               │   ├── de_BE.php
    │               │   ├── de_CH.php
    │               │   ├── de_DE.php
    │               │   ├── de_IT.php
    │               │   ├── de_LI.php
    │               │   ├── de_LU.php
    │               │   ├── de.php
    │               │   ├── dje.php
    │               │   ├── doi_IN.php
    │               │   ├── doi.php
    │               │   ├── dsb_DE.php
    │               │   ├── dsb.php
    │               │   ├── dua.php
    │               │   ├── dv_MV.php
    │               │   ├── dv.php
    │               │   ├── dyo.php
    │               │   ├── dz_BT.php
    │               │   ├── dz.php
    │               │   ├── ebu.php
    │               │   ├── ee.php
    │               │   ├── ee_TG.php
    │               │   ├── el_CY.php
    │               │   ├── el_GR.php
    │               │   ├── el.php
    │               │   ├── en_001.php
    │               │   ├── en_150.php
    │               │   ├── en_AG.php
    │               │   ├── en_AI.php
    │               │   ├── en_AS.php
    │               │   ├── en_AT.php
    │               │   ├── en_AU.php
    │               │   ├── en_BB.php
    │               │   ├── en_BE.php
    │               │   ├── en_BI.php
    │               │   ├── en_BM.php
    │               │   ├── en_BS.php
    │               │   ├── en_BW.php
    │               │   ├── en_BZ.php
    │               │   ├── en_CA.php
    │               │   ├── en_CC.php
    │               │   ├── en_CH.php
    │               │   ├── en_CK.php
    │               │   ├── en_CM.php
    │               │   ├── en_CX.php
    │               │   ├── en_CY.php
    │               │   ├── en_DE.php
    │               │   ├── en_DG.php
    │               │   ├── en_DK.php
    │               │   ├── en_DM.php
    │               │   ├── en_ER.php
    │               │   ├── en_FI.php
    │               │   ├── en_FJ.php
    │               │   ├── en_FK.php
    │               │   ├── en_FM.php
    │               │   ├── en_GB.php
    │               │   ├── en_GD.php
    │               │   ├── en_GG.php
    │               │   ├── en_GH.php
    │               │   ├── en_GI.php
    │               │   ├── en_GM.php
    │               │   ├── en_GU.php
    │               │   ├── en_GY.php
    │               │   ├── en_HK.php
    │               │   ├── en_IE.php
    │               │   ├── en_IL.php
    │               │   ├── en_IM.php
    │               │   ├── en_IN.php
    │               │   ├── en_IO.php
    │               │   ├── en_ISO.php
    │               │   ├── en_JE.php
    │               │   ├── en_JM.php
    │               │   ├── en_KE.php
    │               │   ├── en_KI.php
    │               │   ├── en_KN.php
    │               │   ├── en_KY.php
    │               │   ├── en_LC.php
    │               │   ├── en_LR.php
    │               │   ├── en_LS.php
    │               │   ├── en_MG.php
    │               │   ├── en_MH.php
    │               │   ├── en_MO.php
    │               │   ├── en_MP.php
    │               │   ├── en_MS.php
    │               │   ├── en_MT.php
    │               │   ├── en_MU.php
    │               │   ├── en_MW.php
    │               │   ├── en_MY.php
    │               │   ├── en_NA.php
    │               │   ├── en_NF.php
    │               │   ├── en_NG.php
    │               │   ├── en_NL.php
    │               │   ├── en_NR.php
    │               │   ├── en_NU.php
    │               │   ├── en_NZ.php
    │               │   ├── en_PG.php
    │               │   ├── en.php
    │               │   ├── en_PH.php
    │               │   ├── en_PK.php
    │               │   ├── en_PN.php
    │               │   ├── en_PR.php
    │               │   ├── en_PW.php
    │               │   ├── en_RW.php
    │               │   ├── en_SB.php
    │               │   ├── en_SC.php
    │               │   ├── en_SD.php
    │               │   ├── en_SE.php
    │               │   ├── en_SG.php
    │               │   ├── en_SH.php
    │               │   ├── en_SI.php
    │               │   ├── en_SL.php
    │               │   ├── en_SS.php
    │               │   ├── en_SX.php
    │               │   ├── en_SZ.php
    │               │   ├── en_TC.php
    │               │   ├── en_TK.php
    │               │   ├── en_TO.php
    │               │   ├── en_TT.php
    │               │   ├── en_TV.php
    │               │   ├── en_TZ.php
    │               │   ├── en_UG.php
    │               │   ├── en_UM.php
    │               │   ├── en_US.php
    │               │   ├── en_US_Posix.php
    │               │   ├── en_VC.php
    │               │   ├── en_VG.php
    │               │   ├── en_VI.php
    │               │   ├── en_VU.php
    │               │   ├── en_WS.php
    │               │   ├── en_ZA.php
    │               │   ├── en_ZM.php
    │               │   ├── en_ZW.php
    │               │   ├── eo.php
    │               │   ├── es_419.php
    │               │   ├── es_AR.php
    │               │   ├── es_BO.php
    │               │   ├── es_BR.php
    │               │   ├── es_BZ.php
    │               │   ├── es_CL.php
    │               │   ├── es_CO.php
    │               │   ├── es_CR.php
    │               │   ├── es_CU.php
    │               │   ├── es_DO.php
    │               │   ├── es_EA.php
    │               │   ├── es_EC.php
    │               │   ├── es_ES.php
    │               │   ├── es_GQ.php
    │               │   ├── es_GT.php
    │               │   ├── es_HN.php
    │               │   ├── es_IC.php
    │               │   ├── es_MX.php
    │               │   ├── es_NI.php
    │               │   ├── es_PA.php
    │               │   ├── es_PE.php
    │               │   ├── es.php
    │               │   ├── es_PH.php
    │               │   ├── es_PR.php
    │               │   ├── es_PY.php
    │               │   ├── es_SV.php
    │               │   ├── es_US.php
    │               │   ├── es_UY.php
    │               │   ├── es_VE.php
    │               │   ├── et_EE.php
    │               │   ├── et.php
    │               │   ├── eu_ES.php
    │               │   ├── eu.php
    │               │   ├── ewo.php
    │               │   ├── fa_AF.php
    │               │   ├── fa_IR.php
    │               │   ├── fa.php
    │               │   ├── ff_CM.php
    │               │   ├── ff_GN.php
    │               │   ├── ff_MR.php
    │               │   ├── ff.php
    │               │   ├── ff_SN.php
    │               │   ├── fi_FI.php
    │               │   ├── fil.php
    │               │   ├── fil_PH.php
    │               │   ├── fi.php
    │               │   ├── fo_DK.php
    │               │   ├── fo_FO.php
    │               │   ├── fo.php
    │               │   ├── fr_BE.php
    │               │   ├── fr_BF.php
    │               │   ├── fr_BI.php
    │               │   ├── fr_BJ.php
    │               │   ├── fr_BL.php
    │               │   ├── fr_CA.php
    │               │   ├── fr_CD.php
    │               │   ├── fr_CF.php
    │               │   ├── fr_CG.php
    │               │   ├── fr_CH.php
    │               │   ├── fr_CI.php
    │               │   ├── fr_CM.php
    │               │   ├── fr_DJ.php
    │               │   ├── fr_DZ.php
    │               │   ├── fr_FR.php
    │               │   ├── fr_GA.php
    │               │   ├── fr_GF.php
    │               │   ├── fr_GN.php
    │               │   ├── fr_GP.php
    │               │   ├── fr_GQ.php
    │               │   ├── fr_HT.php
    │               │   ├── fr_KM.php
    │               │   ├── fr_LU.php
    │               │   ├── fr_MA.php
    │               │   ├── fr_MC.php
    │               │   ├── fr_MF.php
    │               │   ├── fr_MG.php
    │               │   ├── fr_ML.php
    │               │   ├── fr_MQ.php
    │               │   ├── fr_MR.php
    │               │   ├── fr_MU.php
    │               │   ├── fr_NC.php
    │               │   ├── fr_NE.php
    │               │   ├── fr_PF.php
    │               │   ├── fr.php
    │               │   ├── fr_PM.php
    │               │   ├── fr_RE.php
    │               │   ├── fr_RW.php
    │               │   ├── fr_SC.php
    │               │   ├── fr_SN.php
    │               │   ├── fr_SY.php
    │               │   ├── fr_TD.php
    │               │   ├── fr_TG.php
    │               │   ├── fr_TN.php
    │               │   ├── fr_VU.php
    │               │   ├── fr_WF.php
    │               │   ├── fr_YT.php
    │               │   ├── fur_IT.php
    │               │   ├── fur.php
    │               │   ├── fy_DE.php
    │               │   ├── fy_NL.php
    │               │   ├── fy.php
    │               │   ├── ga_IE.php
    │               │   ├── ga.php
    │               │   ├── gd_GB.php
    │               │   ├── gd.php
    │               │   ├── gez_ER.php
    │               │   ├── gez_ET.php
    │               │   ├── gez.php
    │               │   ├── gl_ES.php
    │               │   ├── gl.php
    │               │   ├── gom_Latn.php
    │               │   ├── gom.php
    │               │   ├── gsw_CH.php
    │               │   ├── gsw_FR.php
    │               │   ├── gsw_LI.php
    │               │   ├── gsw.php
    │               │   ├── gu_IN.php
    │               │   ├── gu.php
    │               │   ├── guz.php
    │               │   ├── gv_GB.php
    │               │   ├── gv.php
    │               │   ├── ha_GH.php
    │               │   ├── hak.php
    │               │   ├── hak_TW.php
    │               │   ├── ha_NE.php
    │               │   ├── ha_NG.php
    │               │   ├── ha.php
    │               │   ├── haw.php
    │               │   ├── he_IL.php
    │               │   ├── he.php
    │               │   ├── hif_FJ.php
    │               │   ├── hif.php
    │               │   ├── hi_IN.php
    │               │   ├── hi.php
    │               │   ├── hne_IN.php
    │               │   ├── hne.php
    │               │   ├── hr_BA.php
    │               │   ├── hr_HR.php
    │               │   ├── hr.php
    │               │   ├── hsb_DE.php
    │               │   ├── hsb.php
    │               │   ├── ht_HT.php
    │               │   ├── ht.php
    │               │   ├── hu_HU.php
    │               │   ├── hu.php
    │               │   ├── hy_AM.php
    │               │   ├── hy.php
    │               │   ├── i18n.php
    │               │   ├── ia_FR.php
    │               │   ├── ia.php
    │               │   ├── id_ID.php
    │               │   ├── id.php
    │               │   ├── ig_NG.php
    │               │   ├── ig.php
    │               │   ├── ii.php
    │               │   ├── ik_CA.php
    │               │   ├── ik.php
    │               │   ├── in.php
    │               │   ├── is_IS.php
    │               │   ├── is.php
    │               │   ├── it_CH.php
    │               │   ├── it_IT.php
    │               │   ├── it.php
    │               │   ├── it_SM.php
    │               │   ├── it_VA.php
    │               │   ├── iu_CA.php
    │               │   ├── iu.php
    │               │   ├── iw.php
    │               │   ├── ja_JP.php
    │               │   ├── ja.php
    │               │   ├── jgo.php
    │               │   ├── jmc.php
    │               │   ├── jv.php
    │               │   ├── kab_DZ.php
    │               │   ├── kab.php
    │               │   ├── ka_GE.php
    │               │   ├── kam.php
    │               │   ├── ka.php
    │               │   ├── kde.php
    │               │   ├── kea.php
    │               │   ├── khq.php
    │               │   ├── ki.php
    │               │   ├── kkj.php
    │               │   ├── kk_KZ.php
    │               │   ├── kk.php
    │               │   ├── kl_GL.php
    │               │   ├── kln.php
    │               │   ├── kl.php
    │               │   ├── km_KH.php
    │               │   ├── km.php
    │               │   ├── kn_IN.php
    │               │   ├── kn.php
    │               │   ├── kok_IN.php
    │               │   ├── kok.php
    │               │   ├── ko_KP.php
    │               │   ├── ko_KR.php
    │               │   ├── ko.php
    │               │   ├── ksb.php
    │               │   ├── ksf.php
    │               │   ├── ksh.php
    │               │   ├── ks_IN@devanagari.php
    │               │   ├── ks_IN.php
    │               │   ├── ks.php
    │               │   ├── ku.php
    │               │   ├── ku_TR.php
    │               │   ├── kw_GB.php
    │               │   ├── kw.php
    │               │   ├── ky_KG.php
    │               │   ├── ky.php
    │               │   ├── lag.php
    │               │   ├── lb_LU.php
    │               │   ├── lb.php
    │               │   ├── lg.php
    │               │   ├── lg_UG.php
    │               │   ├── lij_IT.php
    │               │   ├── lij.php
    │               │   ├── li_NL.php
    │               │   ├── li.php
    │               │   ├── lkt.php
    │               │   ├── ln_AO.php
    │               │   ├── ln_CD.php
    │               │   ├── ln_CF.php
    │               │   ├── ln_CG.php
    │               │   ├── ln.php
    │               │   ├── lo_LA.php
    │               │   ├── lo.php
    │               │   ├── lrc_IQ.php
    │               │   ├── lrc.php
    │               │   ├── lt_LT.php
    │               │   ├── lt.php
    │               │   ├── luo.php
    │               │   ├── lu.php
    │               │   ├── luy.php
    │               │   ├── lv_LV.php
    │               │   ├── lv.php
    │               │   ├── lzh.php
    │               │   ├── lzh_TW.php
    │               │   ├── mag_IN.php
    │               │   ├── mag.php
    │               │   ├── mai_IN.php
    │               │   ├── mai.php
    │               │   ├── mas.php
    │               │   ├── mas_TZ.php
    │               │   ├── mer.php
    │               │   ├── mfe_MU.php
    │               │   ├── mfe.php
    │               │   ├── mgh.php
    │               │   ├── mg_MG.php
    │               │   ├── mgo.php
    │               │   ├── mg.php
    │               │   ├── mhr.php
    │               │   ├── mhr_RU.php
    │               │   ├── mi_NZ.php
    │               │   ├── mi.php
    │               │   ├── miq_NI.php
    │               │   ├── miq.php
    │               │   ├── mjw_IN.php
    │               │   ├── mjw.php
    │               │   ├── mk_MK.php
    │               │   ├── mk.php
    │               │   ├── ml_IN.php
    │               │   ├── ml.php
    │               │   ├── mni_IN.php
    │               │   ├── mni.php
    │               │   ├── mn_MN.php
    │               │   ├── mn.php
    │               │   ├── mo.php
    │               │   ├── mr_IN.php
    │               │   ├── mr.php
    │               │   ├── ms_BN.php
    │               │   ├── ms_MY.php
    │               │   ├── ms.php
    │               │   ├── ms_SG.php
    │               │   ├── mt_MT.php
    │               │   ├── mt.php
    │               │   ├── mua.php
    │               │   ├── my_MM.php
    │               │   ├── my.php
    │               │   ├── mzn.php
    │               │   ├── nan.php
    │               │   ├── nan_TW@latin.php
    │               │   ├── nan_TW.php
    │               │   ├── naq.php
    │               │   ├── nb_NO.php
    │               │   ├── nb.php
    │               │   ├── nb_SJ.php
    │               │   ├── nd.php
    │               │   ├── nds_DE.php
    │               │   ├── nds_NL.php
    │               │   ├── nds.php
    │               │   ├── ne_IN.php
    │               │   ├── ne_NP.php
    │               │   ├── ne.php
    │               │   ├── nhn_MX.php
    │               │   ├── nhn.php
    │               │   ├── niu_NU.php
    │               │   ├── niu.php
    │               │   ├── nl_AW.php
    │               │   ├── nl_BE.php
    │               │   ├── nl_BQ.php
    │               │   ├── nl_CW.php
    │               │   ├── nl_NL.php
    │               │   ├── nl.php
    │               │   ├── nl_SR.php
    │               │   ├── nl_SX.php
    │               │   ├── nmg.php
    │               │   ├── nnh.php
    │               │   ├── nn_NO.php
    │               │   ├── nn.php
    │               │   ├── no.php
    │               │   ├── nr.php
    │               │   ├── nr_ZA.php
    │               │   ├── nso.php
    │               │   ├── nso_ZA.php
    │               │   ├── nus.php
    │               │   ├── nyn.php
    │               │   ├── oc_FR.php
    │               │   ├── oc.php
    │               │   ├── om_ET.php
    │               │   ├── om_KE.php
    │               │   ├── om.php
    │               │   ├── or_IN.php
    │               │   ├── or.php
    │               │   ├── os.php
    │               │   ├── os_RU.php
    │               │   ├── pa_Arab.php
    │               │   ├── pa_Guru.php
    │               │   ├── pa_IN.php
    │               │   ├── pap_AW.php
    │               │   ├── pap_CW.php
    │               │   ├── pa.php
    │               │   ├── pa_PK.php
    │               │   ├── pap.php
    │               │   ├── pl.php
    │               │   ├── pl_PL.php
    │               │   ├── prg.php
    │               │   ├── ps_AF.php
    │               │   ├── ps.php
    │               │   ├── pt_AO.php
    │               │   ├── pt_BR.php
    │               │   ├── pt_CH.php
    │               │   ├── pt_CV.php
    │               │   ├── pt_GQ.php
    │               │   ├── pt_GW.php
    │               │   ├── pt_LU.php
    │               │   ├── pt_MO.php
    │               │   ├── pt_MZ.php
    │               │   ├── pt.php
    │               │   ├── pt_PT.php
    │               │   ├── pt_ST.php
    │               │   ├── pt_TL.php
    │               │   ├── qu_BO.php
    │               │   ├── qu_EC.php
    │               │   ├── qu.php
    │               │   ├── quz_PE.php
    │               │   ├── quz.php
    │               │   ├── raj_IN.php
    │               │   ├── raj.php
    │               │   ├── rm.php
    │               │   ├── rn.php
    │               │   ├── rof.php
    │               │   ├── ro_MD.php
    │               │   ├── ro.php
    │               │   ├── ro_RO.php
    │               │   ├── ru_BY.php
    │               │   ├── ru_KG.php
    │               │   ├── ru_KZ.php
    │               │   ├── ru_MD.php
    │               │   ├── ru.php
    │               │   ├── ru_RU.php
    │               │   ├── ru_UA.php
    │               │   ├── rwk.php
    │               │   ├── rw.php
    │               │   ├── rw_RW.php
    │               │   ├── sah.php
    │               │   ├── sah_RU.php
    │               │   ├── sa_IN.php
    │               │   ├── sa.php
    │               │   ├── saq.php
    │               │   ├── sat_IN.php
    │               │   ├── sat.php
    │               │   ├── sbp.php
    │               │   ├── sc_IT.php
    │               │   ├── sc.php
    │               │   ├── sd_IN@devanagari.php
    │               │   ├── sd_IN.php
    │               │   ├── sd.php
    │               │   ├── se_FI.php
    │               │   ├── seh.php
    │               │   ├── se_NO.php
    │               │   ├── se.php
    │               │   ├── se_SE.php
    │               │   ├── ses.php
    │               │   ├── sg.php
    │               │   ├── sgs_LT.php
    │               │   ├── sgs.php
    │               │   ├── shi_Latn.php
    │               │   ├── shi.php
    │               │   ├── shi_Tfng.php
    │               │   ├── shn_MM.php
    │               │   ├── shn.php
    │               │   ├── sh.php
    │               │   ├── shs_CA.php
    │               │   ├── shs.php
    │               │   ├── sid_ET.php
    │               │   ├── sid.php
    │               │   ├── si_LK.php
    │               │   ├── si.php
    │               │   ├── sk.php
    │               │   ├── sk_SK.php
    │               │   ├── sl.php
    │               │   ├── sl_SI.php
    │               │   ├── smn.php
    │               │   ├── sm.php
    │               │   ├── sm_WS.php
    │               │   ├── sn.php
    │               │   ├── so_DJ.php
    │               │   ├── so_ET.php
    │               │   ├── so_KE.php
    │               │   ├── so.php
    │               │   ├── so_SO.php
    │               │   ├── sq_AL.php
    │               │   ├── sq_MK.php
    │               │   ├── sq.php
    │               │   ├── sq_XK.php
    │               │   ├── sr_Cyrl_BA.php
    │               │   ├── sr_Cyrl_ME.php
    │               │   ├── sr_Cyrl.php
    │               │   ├── sr_Cyrl_XK.php
    │               │   ├── sr_Latn_BA.php
    │               │   ├── sr_Latn_ME.php
    │               │   ├── sr_Latn.php
    │               │   ├── sr_Latn_XK.php
    │               │   ├── sr_ME.php
    │               │   ├── sr.php
    │               │   ├── sr_RS@latin.php
    │               │   ├── sr_RS.php
    │               │   ├── ss.php
    │               │   ├── ss_ZA.php
    │               │   ├── st.php
    │               │   ├── st_ZA.php
    │               │   ├── sv_AX.php
    │               │   ├── sv_FI.php
    │               │   ├── sv.php
    │               │   ├── sv_SE.php
    │               │   ├── sw_CD.php
    │               │   ├── sw_KE.php
    │               │   ├── sw.php
    │               │   ├── sw_TZ.php
    │               │   ├── sw_UG.php
    │               │   ├── szl.php
    │               │   ├── szl_PL.php
    │               │   ├── ta_IN.php
    │               │   ├── ta_LK.php
    │               │   ├── ta_MY.php
    │               │   ├── ta.php
    │               │   ├── ta_SG.php
    │               │   ├── tcy_IN.php
    │               │   ├── tcy.php
    │               │   ├── te_IN.php
    │               │   ├── teo_KE.php
    │               │   ├── teo.php
    │               │   ├── te.php
    │               │   ├── tet.php
    │               │   ├── tg.php
    │               │   ├── tg_TJ.php
    │               │   ├── the_NP.php
    │               │   ├── the.php
    │               │   ├── th.php
    │               │   ├── th_TH.php
    │               │   ├── ti_ER.php
    │               │   ├── ti_ET.php
    │               │   ├── tig_ER.php
    │               │   ├── tig.php
    │               │   ├── ti.php
    │               │   ├── tk.php
    │               │   ├── tk_TM.php
    │               │   ├── tlh.php
    │               │   ├── tl.php
    │               │   ├── tl_PH.php
    │               │   ├── tn.php
    │               │   ├── tn_ZA.php
    │               │   ├── to.php
    │               │   ├── to_TO.php
    │               │   ├── tpi_PG.php
    │               │   ├── tpi.php
    │               │   ├── tr_CY.php
    │               │   ├── tr.php
    │               │   ├── tr_TR.php
    │               │   ├── ts.php
    │               │   ├── ts_ZA.php
    │               │   ├── tt.php
    │               │   ├── tt_RU@iqtelif.php
    │               │   ├── tt_RU.php
    │               │   ├── twq.php
    │               │   ├── tzl.php
    │               │   ├── tzm_Latn.php
    │               │   ├── tzm.php
    │               │   ├── ug_CN.php
    │               │   ├── ug.php
    │               │   ├── uk.php
    │               │   ├── uk_UA.php
    │               │   ├── unm.php
    │               │   ├── unm_US.php
    │               │   ├── ur_IN.php
    │               │   ├── ur.php
    │               │   ├── ur_PK.php
    │               │   ├── uz_Arab.php
    │               │   ├── uz_Cyrl.php
    │               │   ├── uz_Latn.php
    │               │   ├── uz.php
    │               │   ├── uz_UZ@cyrillic.php
    │               │   ├── uz_UZ.php
    │               │   ├── vai_Latn.php
    │               │   ├── vai.php
    │               │   ├── vai_Vaii.php
    │               │   ├── ve.php
    │               │   ├── ve_ZA.php
    │               │   ├── vi.php
    │               │   ├── vi_VN.php
    │               │   ├── vo.php
    │               │   ├── vun.php
    │               │   ├── wa_BE.php
    │               │   ├── wae_CH.php
    │               │   ├── wae.php
    │               │   ├── wal_ET.php
    │               │   ├── wal.php
    │               │   ├── wa.php
    │               │   ├── wo.php
    │               │   ├── wo_SN.php
    │               │   ├── xh.php
    │               │   ├── xh_ZA.php
    │               │   ├── xog.php
    │               │   ├── yav.php
    │               │   ├── yi.php
    │               │   ├── yi_US.php
    │               │   ├── yo_BJ.php
    │               │   ├── yo_NG.php
    │               │   ├── yo.php
    │               │   ├── yue_Hans.php
    │               │   ├── yue_Hant.php
    │               │   ├── yue_HK.php
    │               │   ├── yue.php
    │               │   ├── yuw_PG.php
    │               │   ├── yuw.php
    │               │   ├── zgh.php
    │               │   ├── zh_CN.php
    │               │   ├── zh_Hans_HK.php
    │               │   ├── zh_Hans_MO.php
    │               │   ├── zh_Hans.php
    │               │   ├── zh_Hans_SG.php
    │               │   ├── zh_Hant_HK.php
    │               │   ├── zh_Hant_MO.php
    │               │   ├── zh_Hant.php
    │               │   ├── zh_Hant_TW.php
    │               │   ├── zh_HK.php
    │               │   ├── zh_MO.php
    │               │   ├── zh.php
    │               │   ├── zh_SG.php
    │               │   ├── zh_TW.php
    │               │   ├── zh_YUE.php
    │               │   ├── zu.php
    │               │   └── zu_ZA.php
    │               ├── Language.php
    │               ├── Laravel
    │               │   └── ServiceProvider.php
    │               ├── List
    │               │   ├── languages.php
    │               │   └── regions.php
    │               ├── MessageFormatter
    │               │   └── MessageFormatterMapper.php
    │               ├── Month.php
    │               ├── OverflowMode.php
    │               ├── PHPStan
    │               │   ├── MacroExtension.php
    │               │   └── MacroMethodReflection.php
    │               ├── Traits
    │               │   ├── Boundaries.php
    │               │   ├── Cast.php
    │               │   ├── Comparison.php
    │               │   ├── Converter.php
    │               │   ├── Creator.php
    │               │   ├── Date.php
    │               │   ├── DeprecatedPeriodProperties.php
    │               │   ├── Difference.php
    │               │   ├── IntervalRounding.php
    │               │   ├── IntervalStep.php
    │               │   ├── LocalFactory.php
    │               │   ├── Localization.php
    │               │   ├── Macro.php
    │               │   ├── MagicParameter.php
    │               │   ├── Mixin.php
    │               │   ├── Modifiers.php
    │               │   ├── Mutability.php
    │               │   ├── ObjectInitialisation.php
    │               │   ├── Options.php
    │               │   ├── Rounding.php
    │               │   ├── Serialization.php
    │               │   ├── StaticLocalization.php
    │               │   ├── StaticOptions.php
    │               │   ├── Test.php
    │               │   ├── Timestamp.php
    │               │   ├── ToStringFormat.php
    │               │   ├── Units.php
    │               │   └── Week.php
    │               ├── TranslatorImmutable.php
    │               ├── Translator.php
    │               ├── TranslatorStrongTypeInterface.php
    │               ├── Unit.php
    │               ├── WeekDay.php
    │               └── WrapperClock.php
    ├── nikic
    │   └── fast-route
    │       ├── composer.json
    │       ├── FastRoute.hhi
    │       ├── LICENSE
    │       ├── README.md
    │       └── src
    │           ├── BadRouteException.php
    │           ├── bootstrap.php
    │           ├── DataGenerator
    │           │   ├── CharCountBased.php
    │           │   ├── GroupCountBased.php
    │           │   ├── GroupPosBased.php
    │           │   ├── MarkBased.php
    │           │   └── RegexBasedAbstract.php
    │           ├── DataGenerator.php
    │           ├── Dispatcher
    │           │   ├── CharCountBased.php
    │           │   ├── GroupCountBased.php
    │           │   ├── GroupPosBased.php
    │           │   ├── MarkBased.php
    │           │   └── RegexBasedAbstract.php
    │           ├── Dispatcher.php
    │           ├── functions.php
    │           ├── RouteCollector.php
    │           ├── RouteParser
    │           │   └── Std.php
    │           ├── RouteParser.php
    │           └── Route.php
    ├── php-di
    │   ├── invoker
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   └── src
    │   │       ├── CallableResolver.php
    │   │       ├── Exception
    │   │       │   ├── InvocationException.php
    │   │       │   ├── NotCallableException.php
    │   │       │   └── NotEnoughParametersException.php
    │   │       ├── InvokerInterface.php
    │   │       ├── Invoker.php
    │   │       ├── ParameterResolver
    │   │       │   ├── AssociativeArrayResolver.php
    │   │       │   ├── Container
    │   │       │   │   ├── ParameterNameContainerResolver.php
    │   │       │   │   └── TypeHintContainerResolver.php
    │   │       │   ├── DefaultValueResolver.php
    │   │       │   ├── NumericArrayResolver.php
    │   │       │   ├── ParameterResolver.php
    │   │       │   ├── ResolverChain.php
    │   │       │   └── TypeHintResolver.php
    │   │       └── Reflection
    │   │           └── CallableReflection.php
    │   └── php-di
    │       ├── change-log.md
    │       ├── composer.json
    │       ├── LICENSE
    │       ├── README.md
    │       ├── src
    │       │   ├── Attribute
    │       │   │   ├── Injectable.php
    │       │   │   └── Inject.php
    │       │   ├── CompiledContainer.php
    │       │   ├── Compiler
    │       │   │   ├── Compiler.php
    │       │   │   ├── ObjectCreationCompiler.php
    │       │   │   ├── RequestedEntryHolder.php
    │       │   │   └── Template.php
    │       │   ├── ContainerBuilder.php
    │       │   ├── Container.php
    │       │   ├── Definition
    │       │   │   ├── ArrayDefinitionExtension.php
    │       │   │   ├── ArrayDefinition.php
    │       │   │   ├── AutowireDefinition.php
    │       │   │   ├── DecoratorDefinition.php
    │       │   │   ├── Definition.php
    │       │   │   ├── Dumper
    │       │   │   │   └── ObjectDefinitionDumper.php
    │       │   │   ├── EnvironmentVariableDefinition.php
    │       │   │   ├── Exception
    │       │   │   │   ├── InvalidAttribute.php
    │       │   │   │   └── InvalidDefinition.php
    │       │   │   ├── ExtendsPreviousDefinition.php
    │       │   │   ├── FactoryDefinition.php
    │       │   │   ├── Helper
    │       │   │   │   ├── AutowireDefinitionHelper.php
    │       │   │   │   ├── CreateDefinitionHelper.php
    │       │   │   │   ├── DefinitionHelper.php
    │       │   │   │   └── FactoryDefinitionHelper.php
    │       │   │   ├── InstanceDefinition.php
    │       │   │   ├── ObjectDefinition
    │       │   │   │   ├── MethodInjection.php
    │       │   │   │   └── PropertyInjection.php
    │       │   │   ├── ObjectDefinition.php
    │       │   │   ├── Reference.php
    │       │   │   ├── Resolver
    │       │   │   │   ├── ArrayResolver.php
    │       │   │   │   ├── DecoratorResolver.php
    │       │   │   │   ├── DefinitionResolver.php
    │       │   │   │   ├── EnvironmentVariableResolver.php
    │       │   │   │   ├── FactoryResolver.php
    │       │   │   │   ├── InstanceInjector.php
    │       │   │   │   ├── ObjectCreator.php
    │       │   │   │   ├── ParameterResolver.php
    │       │   │   │   └── ResolverDispatcher.php
    │       │   │   ├── SelfResolvingDefinition.php
    │       │   │   ├── Source
    │       │   │   │   ├── AttributeBasedAutowiring.php
    │       │   │   │   ├── Autowiring.php
    │       │   │   │   ├── DefinitionArray.php
    │       │   │   │   ├── DefinitionFile.php
    │       │   │   │   ├── DefinitionNormalizer.php
    │       │   │   │   ├── DefinitionSource.php
    │       │   │   │   ├── MutableDefinitionSource.php
    │       │   │   │   ├── NoAutowiring.php
    │       │   │   │   ├── ReflectionBasedAutowiring.php
    │       │   │   │   ├── SourceCache.php
    │       │   │   │   └── SourceChain.php
    │       │   │   ├── StringDefinition.php
    │       │   │   └── ValueDefinition.php
    │       │   ├── DependencyException.php
    │       │   ├── Factory
    │       │   │   └── RequestedEntry.php
    │       │   ├── FactoryInterface.php
    │       │   ├── functions.php
    │       │   ├── Invoker
    │       │   │   ├── DefinitionParameterResolver.php
    │       │   │   └── FactoryParameterResolver.php
    │       │   ├── NotFoundException.php
    │       │   └── Proxy
    │       │       ├── NativeProxyFactory.php
    │       │       ├── ProxyFactoryInterface.php
    │       │       └── ProxyFactory.php
    │       └── support.md
    ├── phpoption
    │   └── phpoption
    │       ├── composer.json
    │       ├── LICENSE
    │       └── src
    │           └── PhpOption
    │               ├── LazyOption.php
    │               ├── None.php
    │               ├── Option.php
    │               └── Some.php
    ├── psr
    │   ├── clock
    │   │   ├── CHANGELOG.md
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   └── src
    │   │       └── ClockInterface.php
    │   ├── container
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   └── src
    │   │       ├── ContainerExceptionInterface.php
    │   │       ├── ContainerInterface.php
    │   │       └── NotFoundExceptionInterface.php
    │   └── simple-cache
    │       ├── composer.json
    │       ├── LICENSE.md
    │       ├── README.md
    │       └── src
    │           ├── CacheException.php
    │           ├── CacheInterface.php
    │           └── InvalidArgumentException.php
    ├── symfony
    │   ├── clock
    │   │   ├── CHANGELOG.md
    │   │   ├── ClockAwareTrait.php
    │   │   ├── ClockInterface.php
    │   │   ├── Clock.php
    │   │   ├── composer.json
    │   │   ├── DatePoint.php
    │   │   ├── LICENSE
    │   │   ├── MockClock.php
    │   │   ├── MonotonicClock.php
    │   │   ├── NativeClock.php
    │   │   ├── README.md
    │   │   ├── Resources
    │   │   │   └── now.php
    │   │   └── Test
    │   │       └── ClockSensitiveTrait.php
    │   ├── deprecation-contracts
    │   │   ├── CHANGELOG.md
    │   │   ├── composer.json
    │   │   ├── function.php
    │   │   ├── LICENSE
    │   │   └── README.md
    │   ├── polyfill-ctype
    │   │   ├── bootstrap80.php
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── Ctype.php
    │   │   ├── LICENSE
    │   │   └── README.md
    │   ├── polyfill-mbstring
    │   │   ├── bootstrap72.php
    │   │   ├── bootstrap80.php
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── Mbstring.php
    │   │   ├── README.md
    │   │   └── Resources
    │   │       └── unidata
    │   │           ├── caseFolding.php
    │   │           ├── lowerCase.php
    │   │           ├── titleCaseRegexp.php
    │   │           └── upperCase.php
    │   ├── polyfill-php80
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── Php80.php
    │   │   ├── PhpToken.php
    │   │   ├── README.md
    │   │   └── Resources
    │   │       └── stubs
    │   │           ├── Attribute.php
    │   │           ├── PhpToken.php
    │   │           ├── Stringable.php
    │   │           ├── UnhandledMatchError.php
    │   │           └── ValueError.php
    │   ├── polyfill-php83
    │   │   ├── bootstrap72.php
    │   │   ├── bootstrap81.php
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── Php83.php
    │   │   ├── README.md
    │   │   └── Resources
    │   │       └── stubs
    │   │           ├── DateError.php
    │   │           ├── DateException.php
    │   │           ├── DateInvalidOperationException.php
    │   │           ├── DateInvalidTimeZoneException.php
    │   │           ├── DateMalformedIntervalStringException.php
    │   │           ├── DateMalformedPeriodStringException.php
    │   │           ├── DateMalformedStringException.php
    │   │           ├── DateObjectError.php
    │   │           ├── DateRangeError.php
    │   │           ├── Override.php
    │   │           └── SQLite3Exception.php
    │   ├── polyfill-php84
    │   │   ├── bootstrap72.php
    │   │   ├── bootstrap82.php
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── Php84.php
    │   │   ├── README.md
    │   │   └── Resources
    │   │       ├── Deprecated.php
    │   │       ├── RoundingMode.php
    │   │       └── stubs
    │   │           ├── Deprecated.php
    │   │           ├── Pdo
    │   │           │   ├── Dblib.php
    │   │           │   ├── Firebird.php
    │   │           │   ├── Mysql.php
    │   │           │   ├── Odbc.php
    │   │           │   ├── Pgsql.php
    │   │           │   └── Sqlite.php
    │   │           ├── ReflectionConstant.php
    │   │           └── RoundingMode.php
    │   ├── polyfill-php85
    │   │   ├── bootstrap80.php
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── Php85.php
    │   │   ├── README.md
    │   │   └── Resources
    │   │       └── stubs
    │   │           ├── DelayedTargetValidation.php
    │   │           ├── Filter
    │   │           │   ├── FilterException.php
    │   │           │   └── FilterFailedException.php
    │   │           └── NoDiscard.php
    │   ├── polyfill-php86
    │   │   ├── bootstrap80.php
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── Php86.php
    │   │   ├── README.md
    │   │   └── Resources
    │   │       └── stubs
    │   │           └── SortDirection.php
    │   ├── translation
    │   │   ├── Catalogue
    │   │   │   ├── AbstractOperation.php
    │   │   │   ├── MergeOperation.php
    │   │   │   ├── OperationInterface.php
    │   │   │   └── TargetOperation.php
    │   │   ├── CatalogueMetadataAwareInterface.php
    │   │   ├── CHANGELOG.md
    │   │   ├── Command
    │   │   │   ├── TranslationLintCommand.php
    │   │   │   ├── TranslationPullCommand.php
    │   │   │   ├── TranslationPushCommand.php
    │   │   │   ├── TranslationTrait.php
    │   │   │   └── XliffLintCommand.php
    │   │   ├── composer.json
    │   │   ├── DataCollector
    │   │   │   └── TranslationDataCollector.php
    │   │   ├── DataCollectorTranslator.php
    │   │   ├── DependencyInjection
    │   │   │   ├── DataCollectorTranslatorPass.php
    │   │   │   ├── LoggingTranslatorPass.php
    │   │   │   ├── TranslationDumperPass.php
    │   │   │   ├── TranslationExtractorPass.php
    │   │   │   ├── TranslatorPass.php
    │   │   │   └── TranslatorPathsPass.php
    │   │   ├── Dumper
    │   │   │   ├── CsvFileDumper.php
    │   │   │   ├── DumperInterface.php
    │   │   │   ├── FileDumper.php
    │   │   │   ├── IcuResFileDumper.php
    │   │   │   ├── IniFileDumper.php
    │   │   │   ├── JsonFileDumper.php
    │   │   │   ├── MoFileDumper.php
    │   │   │   ├── PhpFileDumper.php
    │   │   │   ├── PoFileDumper.php
    │   │   │   ├── QtFileDumper.php
    │   │   │   ├── XliffFileDumper.php
    │   │   │   └── YamlFileDumper.php
    │   │   ├── Exception
    │   │   │   ├── ExceptionInterface.php
    │   │   │   ├── IncompleteDsnException.php
    │   │   │   ├── InvalidArgumentException.php
    │   │   │   ├── InvalidResourceException.php
    │   │   │   ├── LogicException.php
    │   │   │   ├── MissingRequiredOptionException.php
    │   │   │   ├── NotFoundResourceException.php
    │   │   │   ├── ProviderExceptionInterface.php
    │   │   │   ├── ProviderException.php
    │   │   │   ├── RuntimeException.php
    │   │   │   └── UnsupportedSchemeException.php
    │   │   ├── Extractor
    │   │   │   ├── AbstractFileExtractor.php
    │   │   │   ├── ChainExtractor.php
    │   │   │   ├── ExtractorInterface.php
    │   │   │   ├── PhpAstExtractor.php
    │   │   │   └── Visitor
    │   │   │       ├── AbstractVisitor.php
    │   │   │       ├── ConstraintVisitor.php
    │   │   │       ├── TranslatableMessageVisitor.php
    │   │   │       └── TransMethodVisitor.php
    │   │   ├── Formatter
    │   │   │   ├── IntlFormatterInterface.php
    │   │   │   ├── IntlFormatter.php
    │   │   │   ├── MessageFormatterInterface.php
    │   │   │   └── MessageFormatter.php
    │   │   ├── IdentityTranslator.php
    │   │   ├── LICENSE
    │   │   ├── Loader
    │   │   │   ├── ArrayLoader.php
    │   │   │   ├── CsvFileLoader.php
    │   │   │   ├── FileLoader.php
    │   │   │   ├── IcuDatFileLoader.php
    │   │   │   ├── IcuResFileLoader.php
    │   │   │   ├── IniFileLoader.php
    │   │   │   ├── JsonFileLoader.php
    │   │   │   ├── LoaderInterface.php
    │   │   │   ├── MoFileLoader.php
    │   │   │   ├── PhpFileLoader.php
    │   │   │   ├── PoFileLoader.php
    │   │   │   ├── QtFileLoader.php
    │   │   │   ├── XliffFileLoader.php
    │   │   │   └── YamlFileLoader.php
    │   │   ├── LocaleSwitcher.php
    │   │   ├── LoggingTranslator.php
    │   │   ├── MessageCatalogueInterface.php
    │   │   ├── MessageCatalogue.php
    │   │   ├── MetadataAwareInterface.php
    │   │   ├── Provider
    │   │   │   ├── AbstractProviderFactory.php
    │   │   │   ├── Dsn.php
    │   │   │   ├── FilteringProvider.php
    │   │   │   ├── NullProviderFactory.php
    │   │   │   ├── NullProvider.php
    │   │   │   ├── ProviderFactoryInterface.php
    │   │   │   ├── ProviderInterface.php
    │   │   │   ├── TranslationProviderCollectionFactory.php
    │   │   │   └── TranslationProviderCollection.php
    │   │   ├── PseudoLocalizationTranslator.php
    │   │   ├── Reader
    │   │   │   ├── TranslationReaderInterface.php
    │   │   │   └── TranslationReader.php
    │   │   ├── README.md
    │   │   ├── Resources
    │   │   │   ├── bin
    │   │   │   │   └── translation-status.php
    │   │   │   ├── data
    │   │   │   │   └── parents.json
    │   │   │   ├── functions.php
    │   │   │   └── schemas
    │   │   │       ├── xliff-core-1.2-transitional.xsd
    │   │   │       ├── xliff-core-2.0.xsd
    │   │   │       └── xml.xsd
    │   │   ├── StaticMessage.php
    │   │   ├── Test
    │   │   │   ├── AbstractProviderFactoryTestCase.php
    │   │   │   ├── IncompleteDsnTestTrait.php
    │   │   │   ├── ProviderFactoryTestCase.php
    │   │   │   └── ProviderTestCase.php
    │   │   ├── TranslatableMessage.php
    │   │   ├── TranslatorBagInterface.php
    │   │   ├── TranslatorBag.php
    │   │   ├── Translator.php
    │   │   ├── Util
    │   │   │   ├── ArrayConverter.php
    │   │   │   └── XliffUtils.php
    │   │   └── Writer
    │   │       ├── TranslationWriterInterface.php
    │   │       └── TranslationWriter.php
    │   └── translation-contracts
    │       ├── CHANGELOG.md
    │       ├── composer.json
    │       ├── LICENSE
    │       ├── LocaleAwareInterface.php
    │       ├── README.md
    │       ├── Test
    │       │   └── TranslatorTest.php
    │       ├── TranslatableInterface.php
    │       ├── TranslatorInterface.php
    │       └── TranslatorTrait.php
    ├── vlucas
    │   └── phpdotenv
    │       ├── composer.json
    │       ├── LICENSE
    │       └── src
    │           ├── Dotenv.php
    │           ├── Exception
    │           │   ├── ExceptionInterface.php
    │           │   ├── InvalidEncodingException.php
    │           │   ├── InvalidFileException.php
    │           │   ├── InvalidPathException.php
    │           │   └── ValidationException.php
    │           ├── Loader
    │           │   ├── LoaderInterface.php
    │           │   ├── Loader.php
    │           │   └── Resolver.php
    │           ├── Parser
    │           │   ├── EntryParser.php
    │           │   ├── Entry.php
    │           │   ├── Lexer.php
    │           │   ├── Lines.php
    │           │   ├── ParserInterface.php
    │           │   ├── Parser.php
    │           │   └── Value.php
    │           ├── Repository
    │           │   ├── Adapter
    │           │   │   ├── AdapterInterface.php
    │           │   │   ├── ApacheAdapter.php
    │           │   │   ├── ArrayAdapter.php
    │           │   │   ├── EnvConstAdapter.php
    │           │   │   ├── GuardedWriter.php
    │           │   │   ├── ImmutableWriter.php
    │           │   │   ├── MultiReader.php
    │           │   │   ├── MultiWriter.php
    │           │   │   ├── PutenvAdapter.php
    │           │   │   ├── ReaderInterface.php
    │           │   │   ├── ReplacingWriter.php
    │           │   │   ├── ServerConstAdapter.php
    │           │   │   └── WriterInterface.php
    │           │   ├── AdapterRepository.php
    │           │   ├── RepositoryBuilder.php
    │           │   └── RepositoryInterface.php
    │           ├── Store
    │           │   ├── File
    │           │   │   ├── Paths.php
    │           │   │   └── Reader.php
    │           │   ├── FileStore.php
    │           │   ├── StoreBuilder.php
    │           │   ├── StoreInterface.php
    │           │   └── StringStore.php
    │           ├── Util
    │           │   ├── Regex.php
    │           │   └── Str.php
    │           └── Validator.php
    └── voku
        └── portable-ascii
            ├── CHANGELOG.md
            ├── composer.json
            ├── LICENSE.txt
            ├── README.md
            └── src
                └── voku
                    └── helper
                        ├── ASCII.php
                        └── data
                            ├── ascii_by_languages.php
                            ├── ascii_extras_by_languages.php
                            ├── ascii_language_max_key.php
                            ├── ascii_ord.php
                            ├── x000.php
                            ├── x001.php
                            ├── x002.php
                            ├── x003.php
                            ├── x004.php
                            ├── x005.php
                            ├── x006.php
                            ├── x007.php
                            ├── x009.php
                            ├── x00a.php
                            ├── x00b.php
                            ├── x00c.php
                            ├── x00d.php
                            ├── x00e.php
                            ├── x00f.php
                            ├── x010.php
                            ├── x011.php
                            ├── x012.php
                            ├── x013.php
                            ├── x014.php
                            ├── x015.php
                            ├── x016.php
                            ├── x017.php
                            ├── x018.php
                            ├── x01d.php
                            ├── x01e.php
                            ├── x01f.php
                            ├── x020.php
                            ├── x021.php
                            ├── x022.php
                            ├── x023.php
                            ├── x024.php
                            ├── x025.php
                            ├── x026.php
                            ├── x027.php
                            ├── x028.php
                            ├── x029.php
                            ├── x02a.php
                            ├── x02c.php
                            ├── x02e.php
                            ├── x02f.php
                            ├── x030.php
                            ├── x031.php
                            ├── x032.php
                            ├── x033.php
                            ├── x04d.php
                            ├── x04e.php
                            ├── x04f.php
                            ├── x050.php
                            ├── x051.php
                            ├── x052.php
                            ├── x053.php
                            ├── x054.php
                            ├── x055.php
                            ├── x056.php
                            ├── x057.php
                            ├── x058.php
                            ├── x059.php
                            ├── x05a.php
                            ├── x05b.php
                            ├── x05c.php
                            ├── x05d.php
                            ├── x05e.php
                            ├── x05f.php
                            ├── x060.php
                            ├── x061.php
                            ├── x062.php
                            ├── x063.php
                            ├── x064.php
                            ├── x065.php
                            ├── x066.php
                            ├── x067.php
                            ├── x068.php
                            ├── x069.php
                            ├── x06a.php
                            ├── x06b.php
                            ├── x06c.php
                            ├── x06d.php
                            ├── x06e.php
                            ├── x06f.php
                            ├── x070.php
                            ├── x071.php
                            ├── x072.php
                            ├── x073.php
                            ├── x074.php
                            ├── x075.php
                            ├── x076.php
                            ├── x077.php
                            ├── x078.php
                            ├── x079.php
                            ├── x07a.php
                            ├── x07b.php
                            ├── x07c.php
                            ├── x07d.php
                            ├── x07e.php
                            ├── x07f.php
                            ├── x080.php
                            ├── x081.php
                            ├── x082.php
                            ├── x083.php
                            ├── x084.php
                            ├── x085.php
                            ├── x086.php
                            ├── x087.php
                            ├── x088.php
                            ├── x089.php
                            ├── x08a.php
                            ├── x08b.php
                            ├── x08c.php
                            ├── x08d.php
                            ├── x08e.php
                            ├── x08f.php
                            ├── x090.php
                            ├── x091.php
                            ├── x092.php
                            ├── x093.php
                            ├── x094.php
                            ├── x095.php
                            ├── x096.php
                            ├── x097.php
                            ├── x098.php
                            ├── x099.php
                            ├── x09a.php
                            ├── x09b.php
                            ├── x09c.php
                            ├── x09d.php
                            ├── x09e.php
                            ├── x09f.php
                            ├── x0a0.php
                            ├── x0a1.php
                            ├── x0a2.php
                            ├── x0a3.php
                            ├── x0a4.php
                            ├── x0ac.php
                            ├── x0ad.php
                            ├── x0ae.php
                            ├── x0af.php
                            ├── x0b0.php
                            ├── x0b1.php
                            ├── x0b2.php
                            ├── x0b3.php
                            ├── x0b4.php
                            ├── x0b5.php
                            ├── x0b6.php
                            ├── x0b7.php
                            ├── x0b8.php
                            ├── x0b9.php
                            ├── x0ba.php
                            ├── x0bb.php
                            ├── x0bc.php
                            ├── x0bd.php
                            ├── x0be.php
                            ├── x0bf.php
                            ├── x0c0.php
                            ├── x0c1.php
                            ├── x0c2.php
                            ├── x0c3.php
                            ├── x0c4.php
                            ├── x0c5.php
                            ├── x0c6.php
                            ├── x0c7.php
                            ├── x0c8.php
                            ├── x0c9.php
                            ├── x0ca.php
                            ├── x0cb.php
                            ├── x0cc.php
                            ├── x0cd.php
                            ├── x0ce.php
                            ├── x0cf.php
                            ├── x0d0.php
                            ├── x0d1.php
                            ├── x0d2.php
                            ├── x0d3.php
                            ├── x0d4.php
                            ├── x0d5.php
                            ├── x0d6.php
                            ├── x0d7.php
                            ├── x0f9.php
                            ├── x0fa.php
                            ├── x0fb.php
                            ├── x0fc.php
                            ├── x0fd.php
                            ├── x0fe.php
                            ├── x0ff.php
                            ├── x1d4.php
                            ├── x1d5.php
                            ├── x1d6.php
                            ├── x1d7.php
                            └── x1f1.php

```