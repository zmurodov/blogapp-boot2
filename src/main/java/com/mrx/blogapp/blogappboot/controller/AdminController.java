package com.mrx.blogapp.blogappboot.controller;

import com.mrx.blogapp.blogappboot.entity.Category;
import com.mrx.blogapp.blogappboot.entity.User;
import com.mrx.blogapp.blogappboot.service.CategoryService;
import com.mrx.blogapp.blogappboot.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.ArrayList;
import java.util.List;


@Controller
@RequestMapping("/admin")
public class AdminController {
    @Autowired
    private UserService userService;

    @Autowired
    private CategoryService categoryService;

    //    @GetMapping("/login")
//    public String adminPage() {
//
//        return "views/login_form";
//    }

    @ModelAttribute(name = "admin")
    public User getAdmin() {
        Authentication auth = SecurityContextHolder.getContext().getAuthentication();
        String email = auth.getName();
        User user = userService.findOne(email);

        return user;
    }

    @GetMapping("/")
    public String adminHomePage(Model model) {
//        Authentication auth = SecurityContextHolder.getContext().getAuthentication();
//        String email = auth.getName();
//        User user = userService.findOne(email);
//        model.addAttribute("admin", user);
        return "views/admin/home";
    }

//    @GetMapping("/category.index")
//    public String categoryPage(@ModelAttribute(name = "admin") User user, Model model) {
////        Authentication auth = SecurityContextHolder.getContext().getAuthentication();
////        String email = auth.getName();
////        User user = userService.findOne(email);
////        model.addAttribute("admin", user);
//        List<Category> categories = categoryService.findAll();
//        List<String> errors = new ArrayList<>();
//
//        model.addAttribute("categories", categories);
//        model.addAttribute("errors", errors);
//
//        return "views/admin/categories/index";
//    }

}
