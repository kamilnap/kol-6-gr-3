Feature: Gojira Cuboid

  Scenario: pole powierzchni bocznej prostopadloscianu
    Given I am on homepage
    When I follow "ppb by Gojira"
    And I fill in "A" with "1"
    And I fill in "B" with "2"
    And I fill in "H" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12"
