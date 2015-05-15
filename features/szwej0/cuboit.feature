Feature: Obliczenia

  Scenario: Pole boczne prostopadloscianu
    Given I am on homepage
    When I follow "Kalkulator by szwej0"
    And I fill in "a" with "3"
    And I fill in "b" with "4"
    And I fill in "h" with "5"

    And I press "Oblicz"
    Then I should see "Wynik wynosi 70"