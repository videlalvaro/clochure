# Clochure - A Better Clojure #

[Clochure](http://clochure.org) is an educated attempt to solve Clojure's number one problem and first obstacle that puts away newcomers: **parentheses**.

We've found an elegant and practical solution to the problem: interchange parentheses with square brackets. Why?

Since 2008 one programming language has seen a unprecedented growth in popularity despite it weird syntax: `Objective-C`. Why, because to create applications for the App Store you have to code in Objective-C. Over 800.000 apps in the App Store are a testimony of the popularity of this language.

What does this have to do with Clochure? Well Objective-C syntax looks like this:

```objective-c
[[MyObject alloc] init]
```

Don't you see something familiar there? Yep. We also noticed it.

So now with Clochure you get all the advantages of the JVM, the elegance of Clojure and tons of Objective-C developers that can jump straight away to work in your startup code.

Also to makes things easier for library maintainer we kept the `clojure` namespaces to keep BC with existing Clojure projects.

## Advantages

Some of the advantages of Clochure over Clojure are:

- Easier to read, compare: `(+ (expt 2 30) 2)` with `[+ [expt 2 30] 2]`.
- It compiles faster, since the compiler don't need to differentiate Java parentheses from Clojure ones.
- You can find thousands of iOS developers that can jump right on to Clochure Projects.
- The `[]` keys are closer to the central row of your keyboard than the less comfortable `()`.
- You don't need to hold the shift key to type `[]` therefore you can code faster.

TL;DR: Use Clochure

## Getting Clochure

Simply type:

```bash
git clone git://github.com/videlalvaro/clochure.git
```


## Building Clochure

Using **ant**:

```bash
cd clochure
ant jar -Dmaven.test.skip=true
```

Since we haven't ported Clojure tests to Clochure you need to skip them for the time being.

## Running Clochure ##

To run Clochure type:

```bash
java -cp clochure.jar clojure.main
```

## How can I port my Clojure code to Clochure?

We've got you covered. inside the `utils` folder you will find a shell script that you can invoke in your Clojure project to convert it to Clochure.

```bash
cd utils
./makeitreadable.sh /path/to/clojure/project
```

**NOTE**: You will have to do this for each of your project dependencies. The best way to achieve it is to install Clochure and then create a local maven repo so you don't mix it with your local Clojure maven repo. You can create the file `~/.m2/settings.xml` and the modify the `localRepository` option.

## How do I pronounce Clochure

It should be pronounced as in French: clo-chure.

## Why, How, When? ##

Usability is very important for a new programming language, and lets face it, Clojure usability and friendliness to newcomers is very bad. All those parentheses really hurt Clojure reputation. So one the eve of **April 1st** we sat down in a brainstorm session with a team of PLT experts. Ideas starting flying around:

- We need monads –said one.
- No, –said another one–, I think logic programming is what we actually need.
- Actually we need a Clojure2Scala compiler –said a third.

Ideas kept mumbling around until the PLT expert with ironic moustache said:

- I think the solution is simpler and it has been in front of our eyes since 2008.
- And what is it?
- Objective-C. Objective-C is massively popular and it has a syntax that resembles that of Clojure: `[[MyObject alloc] init]`.
- I don’t get it? –replied the first one.
- We just swap Clojure parentheses for square brackets, and BAM!, millions of iOS developers can use our language.

And that’s pretty much how Clochure came to life.

## Credits ##

- Idea [@old_sound](https://twitter.com/old_sound/)
- [clochure.org](http://clochure.org) design and logo by [@vdrnn](https://twitter.com/vdrnn/)

For the original Clojure credits see readme.txt
