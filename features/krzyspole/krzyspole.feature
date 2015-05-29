Feature: Obliczenia

  Scenario: Kalkulator 2*a*h+2*b*h
    Given I am on homepage
    When I follow "krzysztofpole"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I fill in "b" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 72"
