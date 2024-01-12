SELECT *
FROM Person
WHERE rights = 'admin';



-- zamestnanci ktori su zamestnani vo viacerych spolocnostiach
SELECT
    p.person_id,
    p.name AS employee_name,
    GROUP_CONCAT(c.name ORDER BY c.name) AS companies
FROM
    Person p
        JOIN
    Employment e ON p.person_id = e.person_id
        JOIN
    Company c ON e.company_id = c.company_id
GROUP BY
    p.person_id
HAVING
        COUNT(DISTINCT e.company_id) > 1;


-- společnosti, které mají více než jednoho administrátora:

SELECT
    c.company_id,
    c.name AS company_name,
    COUNT(DISTINCT CASE WHEN p.rights = 'admin' THEN p.person_id END) AS admin_count
FROM
    Company c
        JOIN
    Employment e ON c.company_id = e.company_id
        JOIN
    Person p ON e.person_id = p.person_id
GROUP BY
    c.company_id, c.name
HAVING
        admin_count > 1;

-- vyberie informácie o zamestnancoch, ktorí absolvovali školenia a získali certifikáty,
-- spolu s názvami spoločností, kde tieto školenia boli absolvované, a dátumami,
-- kedy boli dokončené

SELECT
    p.name AS person_name,
    c.name AS company_name,
    t.certificate,
    t.date_completed
FROM
    Training t
        JOIN
    Person p ON t.person_id = p.person_id
        JOIN
    Company c ON t.company_id = c.company_id;
