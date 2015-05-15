Plik features/LukaszB012/prostopadloscian.feature:

Feature: Obliczenia

  Scenario: Pole powieszchni bocznej prostopadloscianu
    Given I am on homepage
    When I follow "Prostopadloscian by LukaszB012"
    And I fill in "a" with "4"
    And I fill in "b" with "3"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Pole powieszchni bocznej wynosi 28"