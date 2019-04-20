package com.mrx.blogapp.blogappboot.controller;

import com.mrx.blogapp.blogappboot.entity.User;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class IndexController {

    @GetMapping("/")
    public String showIndexPage(){

        return "home";
    }

    @GetMapping("/login")
    public String showLoginForm( Model model){

        model.addAttribute("user", new User());

        return "views/login/loginForm";
    }

    @GetMapping("/welcome")
    public String showWelcome(){
        return "views/welcome";
    }

}
