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
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;

import javax.validation.Valid;
import java.util.ArrayList;
import java.util.List;

@Controller
public class CategoryController {


    @Autowired
    private UserService userService;
    @Autowired
    private CategoryService categoryService;

    @GetMapping("category.index")
    public String categoryPage(@ModelAttribute(name = "admin") User user, Model model) {
//        Authentication auth = SecurityContextHolder.getContext().getAuthentication();
//        String email = auth.getName();
//        User user = userService.findOne(email);
//        model.addAttribute("admin", user);
        List<Category> categories = categoryService.findAll();
        List<String> errors = new ArrayList<>();

        model.addAttribute("categories", categories);
        model.addAttribute("errors", errors);

        return "views/admin/categories/index";
    }

    @GetMapping("/category.create")

    public String categoryCreate(@ModelAttribute(name = "admin") User user, Model model) {

//        Authentication auth = SecurityContextHolder.getContext().getAuthentication();
//        String email = auth.getName();
//        User user = userService.findOne(email);
//        model.addAttribute("admin", user);
        List<String> errors = new ArrayList<>();

        model.addAttribute("errors", errors);
        model.addAttribute("category", new Category());

        return "views/admin/categories/create";
    }

    @PostMapping("/category.store")
    public String categoryStore(@Valid Category category, @ModelAttribute(name = "admin") User user, BindingResult bindingResult, Model model) {
        List<String> errors = new ArrayList<>();

//        Authentication auth = SecurityContextHolder.getContext().getAuthentication();
//        String email = auth.getName();
//        User user = userService.findOne(email);
//        model.addAttribute("admin", user);

        if (bindingResult.hasErrors()) {
            return "views/admin/categories/create";
        }
        if (categoryService.isPresent(category.getName())) {
            errors.add("This Category name already present");
            model.addAttribute("errors", errors);

            return "views/admin/categories/create";
        }

        categoryService.save(category);

        return "redirect:/category.index";
    }
}
