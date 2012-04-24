SimpleMQ Admin Generator Bundle SandBox
=======================================

Sandbox application using SimpleMQ Admin Generator :
  https://github.com/marcosQuesada/SimpleMQAdminGeneratorBundle

This Bundle is a easy way to get full Admin section in your app , mapping all needed entities using services as Sonata Admin does. All those entities are tagged as admin.pool, where admin.pool is the master piece in AdminGeneratorBundle , being hooked by admin.pool service on SimpleMQAdminGenerator , and managed them by a complete CRUD on admin backend.

Actually this bundle is completelly functional, but has lots of details that has to be fixed, so you can say that is in Pre Release state.

By default entities are mapped in all CRUD views with all his fields , but if you prefer it you can customize them overriding number of form , grid, list fields, by extending Admin Class in your own Bundle. Redefining them is as easy as Symfony 2 does, so you are able to define standard forms to be used in your Admin Area.

Actually CRUDController is implemented as a service , being decoupled from Original Controller Class has lots of benefits as injecting all depending services in class controller.

Twitter Bootstrap has been included in all templates in order the get a nice look.

Mapped Entities are in AcmeBaseBundle .

This project has been developed as a way to improve my knowledge on Symfony 2 services , so it's just a toy project ;)