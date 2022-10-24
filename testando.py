from typing import Tuple
import requests


class Test:
    def fizz_buzz(self) -> list:
        lista_fizz_buzz = []
        for i in range(1,101,1):
            if(i%3==0 and i%5!=0):
                lista_fizz_buzz.append("Fizz!")
            elif(i%5==0 and i%3!=0):
                lista_fizz_buzz.append("Buzz!")
            if(i%3==0 and i%5==0):
                lista_fizz_buzz.append("FizzBuzz!")
        return lista_fizz_buzz

    def snake_to_camel(self, data: dict) -> dict:
        camelCase = ''
        aux = 0
        for i in data:
            
            for j in i:
                if(j != "_"):
                    if(aux == 0):
                        camelCase+=j
                    if(aux == 1):
                        camelCase+=j.upper()
                        aux = 0
                if(j == "_"):            
                    aux = 1
            camelCase+=" "

        new_camelCase = camelCase.split(" ")
        new_data = {}
        aux = 0
        for i in data:
            new_data.update({new_camelCase[aux]:data.get(i)})
            aux+=1
        return new_data
        
    def get_omdb_movie(self, title: str) -> Tuple[int, dict]:
        movie = requests.get(f"http://www.omdbapi.com/?i=tt3896198&apikey=3b4f80b9&t={title}".replace(" ","+"))
        
        return movie.status_code, movie.content

    def get_awesome_project_link(self) -> str:
        return "https://github.com/you/awesome_project_name"

    def run(self):
        snake_data = {
            "first_name": "João",
            "last_name": "da Silva Pires",
            "e-mail": "joaosp124@example.com",
            "cpf": "425.441.280-03",
            "marital_status": "Solteiro",
            "age": 58,
            "mobile_phone": "11",
        }
        movie_name = "Toy Story"

        print("1. FizzBuzz!")
        fizzbuzz_list = self.fizz_buzz()
        print(fizzbuzz_list)

        print("2. snake_case -> camelCase")
        camel_data = self.snake_to_camel(snake_data)
        print(camel_data)

        print("3. OMDb API Use Case")
        status, resp = self.get_omdb_movie(movie_name)
        print("Status: %d\nBody: %s" % (status, resp))

        print("4. Books Rest API")
        awesome_api_link = self.get_awesome_project_link()
        print(awesome_api_link)



test_case = Test()
test_case.run()
