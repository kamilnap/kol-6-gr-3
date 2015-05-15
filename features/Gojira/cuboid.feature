Feature: Gojira Cuboid

  Scenario: pole powierzchni bocznej prostopadloscianu
    Given I am on homepage
    When I follow "ppb by gojira"
    And I fill in "a" with "1"
    And I fill in "b" with "2"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12"