Feature: I want to query productTypes
  Scenario: Fetch a productType by id
    Given a "productType" is identified by "id"
    Given i want to fetch a "productType"
    Then the path should be "product-types/id"
    And the method should be "GET"

  Scenario: Query customers with filter applied
    Given i want to query "productTypes"
    And filter them with criteria 'name="Peter"'
    Then the path should be "product-types?where=name%3D%22Peter%22"
    And the method should be "GET"

  Scenario: Query customers with filter applied
    Given i want to query "productTypes"
    And filter them with criteria 'name="Peter"'
    Then the path should be "product-types?where=name%3D%22Peter%22"
    And the method should be "GET"

  Scenario: Query customers with limit
    Given i want to query "productTypes"
    And limit the result to "10"
    Then the path should be "product-types?limit=10"
    And the method should be "GET"

  Scenario: Query customers with offset
    Given i want to query "productTypes"
    And offset the result with "10"
    Then the path should be "product-types?offset=10"
    And the method should be "GET"

  Scenario: Query customers sorted
    Given i want to query "productTypes"
    And sort them by "name"
    Then the path should be "product-types?sort=name"
    And the method should be "GET"

  Scenario: Query parameters should be sorted
    Given i want to query "productTypes"
    And sort them by "name"
    And offset the result with "10"
    Then the path should be "product-types?offset=10&sort=name"
    And the method should be "GET"
